<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Auth;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $banners= Banner::all();
        return view('banners.index')->with('banners',$banners);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'myfile' => 'required|mimes:jpg,jpeg,png,gif'
           ]);
        //
        $file = $request->file('myfile');
        $name = Str::random(15);
        $url = \Storage::putFileAs('images/banner', $file, $name . '.' . $file->extension());

        $banner=new Banner();
		
		$banner->img=$url;
		$banner->user_id=Auth::user()->id;
        $banner->caption=$request->caption;
		
		if($banner->save()) {
            return back()->with('banner_success','Banner uploaded successfully');
        }
        else
        {
            return view('banners.index')->with('banner_error','Could not upload banner');
        }

       
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
    if( $banner = Banner::findOrFail($id))
    {
        if(\File::exists(public_path($banner->img))){
            \File::delete(public_path($banner->img));
           
            
                $banner->delete();
                return back()->with('banner_success','Banner Deleted successfully');
            }
            else{
                $banner->delete();
                return back()->with('banner_error','Banner does not exist');
            }
    }
    else{
        return back()->with('banner_error','Banner does not exist');
    }
        
       
       

    }
}
