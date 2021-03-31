<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Service;
use Nexmo\Laravel\Facade\Nexmo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use Illuminate\Support\Facades\DB;



use App\TicketEntry;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function client()
    {
        $data= Client::get();
        $services= Service::get();
        return view('admin/client',compact('data','services'));
    }
    public function index()
    {
        $data =Service::all();
        $category =Service::all()->unique("category");
       
        return view('front/contact',compact('data','category'));
    }
    public function mail()
    {
        $details = [
            'title' => 'Mail from ahmeddakhli99@gmail.com',
            'body' => 'This is for testing email using mailtrap'
        ];
       
        Mail::to('ahmeddakhli99@gmail.com')->send(new \App\Mail\MyTestMail($details));
       
        
        return view('emails/myTestMail',compact('details'));
    }

    public function masseg(Request $request)
    {
      /*  
          Nexmo::message()->send([
            'to'   => '201146820407',
            'from' => '201146820407',
            'text' => $request->masseg,
            ]);*/
            
        $details = [
            'title' => 'Mail from ahmeddakhli99@gmail.com',
            'body' =>$request->masseg,
        ];
       
        Mail::to('ahmeddakhli99@gmail.com')->send(new \App\Mail\MyTestMail($details));

        DB::table('clients')
              ->where('id', $request->id)
              ->update(['masseg' =>$request->masseg]);
              

           
        return redirect()->route('/client')
        ->with('success','order created successfully.');
        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
      
        ]);
        
        
        $request['services'] = collect($request['services'])->implode(",");
        
        Client::create($request->all());
   
   
      
        return redirect()->route('clients.index')
                        ->with('success','order created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->update([
            'category' => $request->category,
      
        ]);
        return redirect()->route('client.index')
                        ->with('success','Project created successfully.');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
