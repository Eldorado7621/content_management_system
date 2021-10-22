<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use App\Models\About;
use App\Models\Theme;
use App\Models\Sermon;
use App\Models\ChurchEvent;
use App\Models\Testimony;
use App\Models\Contact;

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
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sermon=Sermon::all();
        $count = $sermon->count();
        if($count>2)
        {
            $sermon= Sermon::orderBy('id', 'desc')->take(3)->get();
        }
        $testimonys=Testimony::all();
        $count = $testimonys->count();
        if($count>2)
        {
            $testimonys= Testimony::orderBy('id', 'desc')->take(3)->get();
        }
        
        $upcoming_event=ChurchEvent::where('from','>=',date('Y-m-d'))->orderBy('from', 'asc')->first();

        $contacts= Contact::orderBy('id', 'desc')->take(1)->get();
        $banners=Banner::all();
        $about=About::all();
        $theme=Theme::all();
        return view('index')->with(['banners'=>$banners,
                                    'about'=>$about,
                                    'theme'=>$theme,
                                   'sermon'=>$sermon,
                                    'upcoming_event'=>$upcoming_event,
                                    'testimonys'=>$testimonys,
                                    'contacts'=>$contacts]);
    }

    public function create_user()
    {
        return view('create_users');
    }
}
