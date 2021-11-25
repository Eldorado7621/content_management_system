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
use App\Models\Livestream;
use App\Models\Department;

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
       // $this->middleware('auth');
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

//Livestream

        $livestream=Livestream::where('status', '=',true)->orderBy('created_at', 'asc')->first();
        //$count=count($livestreams);
        if($livestream !=null)
        {
            $livestatus=true;
        }
        else
            $livestatus=false;

        $banners=Banner::all();
        $about=About::all();
        $theme=Theme::all();
        $depts=Department::all();
        return view('index')->with(['banners'=>$banners,
                                    'about'=>$about,
                                    'theme'=>$theme,
                                   'sermon'=>$sermon,
                                    'upcoming_event'=>$upcoming_event,
                                    'testimonys'=>$testimonys,
                                    'contacts'=>$contacts,
                                    'livestatus'=>$livestatus,
                                    'livestream'=>$livestream,
                                    'depts'=>$depts,
                                ]);
    }

    public function create_user()
    {
        return view('create_users');
    }

    public function monthlyTheme(Request $request)
    {
        $monthlyTheme = array(
            "title" =>  $request->title,
            "message" =>  $request->message,
            "reference" =>  $request->reference,
        );
        return view('monthly-theme')->with('monthlyTheme',$monthlyTheme);
           
    }
}
