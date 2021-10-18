<?php

namespace App\Http\Controllers;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use App\Models\About;
use App\Models\Theme;
use App\Models\Sermon;

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

      



        $banners=Banner::all();
        $about=About::all();
        $theme=Theme::all();
        return view('index')->with(['banners'=>$banners,
                                    'about'=>$about,
                                    'theme'=>$theme,
                                   'sermon'=>$sermon]);
    }

    public function create_user()
    {
        return view('create_users');
    }
}
