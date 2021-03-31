<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use App\Models\Photo;

 use \App\Http\Requests\PhotoRequest;
use Illuminate\Support\Str;

class PhotoController extends Controller
{
  
    
   
    public function gallary()
    {
        $data= Photo::all()->unique('category')->where('status','cover');
        
        return view('front/gallery',compact('data'));
    
    }
   
    public function category($name_cat)
    {
        $imgs= Photo::all()->where('category',$name_cat);
        
        return view('front/category',compact('imgs','name_cat'));
    
    }
  
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Photo::get();
      
        
        return view('admin/photos',compact('data'));
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/photo/create');
    }

    public function addphoto()
    {
        $data= Photo::all()->unique('category');

        return view('admin/photo/addimgstocat',compact('data'));
    }

  
    public function storephoto( $request,$file)
    {

        $fileName = time().rand(0, 1000).pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $fileName = $fileName.'.'.$file->getClientOriginalExtension();
        $file->move(public_path('images'),$fileName);
        Photo::create([
            'category' => $request->category,
            'image' => $fileName,
            'description' => $request->description,
            'status' => $request->status,
        ]);
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(PhotoRequest $request)
    {
        
        if($request->hasfile('imagecover')) { 
        $this->storephoto($request,$request->file('imagecover'));
        
        }
        
        if($request->hasfile('image')) { 
            foreach($request->file('image') as $file)
            {
                $this->storephoto($request,$file);
            }
        }   
      
        return redirect()->route('photos.index')
                        ->with('success','Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    
    public function show(Photo $photo)
    {
       return view('admin/photo/show',compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit(Photo $photo)
    {
        
        return view('admin/photo/edit',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(PhotoRequest $request, Photo $photo)
    {
       
        $name = $request->image->getClientOriginalName();
        $newName = date('s').$name;
        if($request->has('image')){
          
            $request->image->move(public_path('images'), $newName);
        }
       
        
       
        /* Store $imageName name in DATABASE from HERE */
        $photo->update([
            'category' => $request->category,
            'image' => $newName,
            'description' => $request->description,
        ]);
        return redirect()->route('photos.index')
                        ->with('success','Project created successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photo $photo)
    {
        $photo->delete();
    
        return redirect()->route('photos.index')
                        ->with('success','Project deleted deleted successfully');
    }
}
