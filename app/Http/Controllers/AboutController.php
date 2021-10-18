<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $about= About::all();
        return view('about.index')->with('about',$about);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $this->validate($request, [
            'title' => 'required',
            'message'=> 'required',
            'id'=>'required'
           ]);
        //
       
        if($request->id!=0)
        {
         $about = About::findOrFail($request->id);
         $about->delete();
        }
        
        $about=new About();
		
		$about->title=$request->title;
        $about->message=$request->message;
		$about->user_id=Auth::user()->id;
		
		if($about->save()) {
            return back()->with('success','Update successful');
        }
        else
        {
            return back()->with('error','Update not successful');
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
        $about = About::find($id);

        $about->title = $request->title;
        $about->message = $request->message;
        if($about->save())
        {
            return back()->with('success','Update successful');
        }
        
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
    }
}
