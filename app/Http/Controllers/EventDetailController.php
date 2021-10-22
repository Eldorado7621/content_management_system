<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventDetail;
use Validator;

class EventDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events_details= EventDetail::paginate(5);
        return view("event.view_events_details")->with('events_details',$events_details);
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
      
        if($request->ajax())
     {
        
       $rules = array(
       'title.*'  => 'required',
       'date.*'  => 'required',
       'minister.*'  => 'required',
       'venue.*'  => 'required',
       'hh_start.*'  => 'required',
       'mm_start.*'  => 'required',
       'hh_end.*'  => 'required',
       'mm_end.*'  => 'required'
      );
      $error = Validator::make($request->all(), $rules);
      if($error->fails())
      {
        
       return response()->json([
        'error'  => $error->errors()->all()
       ]);
       dd($error);
      }

      $title = $request->title;
      $date = $request->date;
	  $minister = $request->minister;
      $venue = $request->venue;
      $hh_start = $request->hh_start;
      $mm_start = $request->mm_start;
      $hh_end = $request->hh_end;
      $mm_end =  $request->mm_end;
      $event_id = $request->event_id;
      for($count = 0; $count < count($title); $count++)
      {
       $data = array(
        'date' => $date[$count],
        'title'  => $title[$count],
        'minister'  => $minister[$count],
        'venue'  => $venue[$count],
        'time_from'  => $hh_start[$count].":". $mm_start[$count],
        'time_to'  => $hh_end[$count].":". $mm_end[$count],
        'church_event_id'  => $event_id[$count],
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
       );
       $insert_data[] = $data; 
      }

      if (EventDetail::insert($insert_data))
      {
        return response()->json([
	  
            'success'  => 'Data Added successfully.'
           ]);
      }
      else
      {
        return response()->json([
	  
            'error'  => 'Not successful.'
           ]);
      }
      
	  
    
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
        if( $event = EventDetail::findOrFail($id))
        {
              $event->delete();
              return back()->with('success','Program Deleted successfully');
         }
         else
         {
            return back()->with('error','Unable to Delete Event ');   
         }
    }
}
