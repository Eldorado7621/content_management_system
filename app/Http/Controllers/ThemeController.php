<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\Models\Theme;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $theme= Theme::all();
        return view('theme.index')->with('theme',$theme);
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
            'reference'=>'required'
           ]);
        $theme=new Theme();
		
		$theme->title=$request->title;
        $theme->reference=$request->reference;
        $theme->message=$request->message;
		$theme->user_id=Auth::user()->id;
		
		if($theme->save()) {
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
        $theme = Theme::find($id);

        $theme->title = $request->title;
        $theme->reference = $request->reference;
        $theme->message = $request->message;
        if($theme->save())
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
