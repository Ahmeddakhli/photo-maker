<?php

namespace App\Http\Controllers;
use App\Models\Photo;
use App\Models\Client;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/home');
    }
    public function about()
    {
        return view('front/about');
    }

    public function slider()
    {
        $data= Photo::all()->where('status','in slider');
        
        return view('admin/photos',compact('data'));
    
    }
    public function admins()
    {
        $data= User::all();
        
        return view('admin/admins',compact('data'));
    
    }
    public function front()
    {
        $data= Photo::all()->where('status','in slider');
        $links= Setting::all()->where('page',"link");

        
        return view('front/welcome',compact('data','links'));
    
    }
    public function  ourservices()
    {
       /* if (App::isLocale('en')) {
     
        }*/
        $settings= Setting::all()->where('page',"خدماتنا");
        $links= Setting::all()->where('page',"link");
        
        return view('front/services',compact('settings','links'));
    }
  

    public function wedgs()
    {
        $client = Client::all()->count();
       $count = Photo::all()->count();
       $slider= Photo::all()->count();
       return view('admin/home',compact('count','client','slider'));
    }
}
