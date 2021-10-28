<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Meeting;
use App\Days;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   //const $days_of_week=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    public function index()
    {
        //
        $days_of_week=Days::days_of_week;
        $program_type=Days::program_type;
        $meetings=Meeting::all();
       return view('meetings.index')->with(['meetings'=>$meetings,'days_of_week'=>$days_of_week,'program_type'=>$program_type]);
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
             'day'=>'required',
            'type'=>'required',
            'hh'=>'required',
            'mm'=>'required',
            'other_info'=>'required'
           
           ]);

           $meeting=new Meeting();
		
           $meeting->title=$request->title;
           $meeting->type=$request->type;
           $meeting->day=$request->day;
           $meeting->other_info=$request->other_info;
           $meeting->time=$request->hh.":".$request->mm;
   
           if($meeting->save()) {
               
              
               return back()->with('success','Created successfully');
           }
           else
           {
               return back()->with('error','Could not create');
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
        $this->validate($request, [
            'title' => 'required',
             'day'=>'required',
            'type'=>'required',
             'other_info'=>'required'
           
           ]);

           $meeting = Meeting::find($id);
           if($request->hh==null or $request->mm==null)
           {
               $time=$meeting->time;
           }
           else{
            $time=$request->hh.":".$request->mm;
           }

           $meeting->title = $request->title;
           $meeting->day = $request->day;
           $meeting->type = $request->type;
           $meeting->other_info = $request->other_info;
           $meeting->time = $time;

           if($meeting->save())
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
        if( $meeting = Meeting::findOrFail($id))
        {
            $meeting->delete();
            return back()->with('success','Deleted successfully');
        
     }
       else{
        return back()->with('error','does not exist');
     }

    }
    public function view_meetings()
    {
        $days_of_week=Days::days_of_week;
        $program_type=Days::program_type;
        $meetings=Meeting::all();
        return view('meetings.view_meetings')->with(['meetings'=>$meetings,'days_of_week'=>$days_of_week,'program_type'=>$program_type]);
    }
}
