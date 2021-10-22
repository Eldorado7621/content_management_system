<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChurchEvent;

use App\Models\EventDetail;
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
        $events= ChurchEvent::paginate(5);
        return view("event.view_events")->with('events',$events);
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
               $event=ChurchEvent::latest()->first();
               $event=$event->id;
              
               return back()->with(['success'=>'File uploaded successfully','event'=>$event]);
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
        return view("event.create_church_event")->with('event',0);
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
        if( $event = ChurchEvent::findOrFail($id))
        {
            $event_detail=EventDetail::where('church_event_id',$id);
            $event->delete();
            $event_detail->delete();
          return back()->with('success','Program Deleted successfully');
         }
         else
         {
            return back()->with('error','Unable to Delete Event ');   
         }
    }
    public function upcoming_event()
    {
       $events=ChurchEvent::whereYear('from', '=',date('Y'))->orderBy('from', 'asc')->get();
       //dd($events);
       if($events !=null)
       {
        
        return view('events')->with('events',$events);

      }
      return view('events')->with('events',$events);
      
    }
}
