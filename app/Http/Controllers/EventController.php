<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChurchEvent;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        //
        $this->validate($request, [
            'theme' => 'required',
             'from'=>'required',
            'to'=>'required'
           ]);

           $event=new ChurchEvent();
		
           $event->theme=$request->theme;
           $event->from=$request->from;
           $event->to=$request->to;
           $event->user_id=Auth::user()->id;
   
           if($event->save()) {
               return back()->with('success','File uploaded successfully');
           }
           else
           {
               return back()->with('error','Could not upload file');
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
    public function create_event()
    {
        //
        return view("event.create_church_event");
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
