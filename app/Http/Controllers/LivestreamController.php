<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livestream;

class LivestreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $livestreams=Livestream::all();
       return view('livestreams.index')->with(['livestreams'=>$livestreams]);
   
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
             'program'=>'required',
            'link'=>'required',
            'preacher'=>'required',
           
           ]);

           $livestream=new Livestream();
		
           $livestream->title=$request->title;
           $livestream->program=$request->program;
           $livestream->link=$request->link;
           $livestream->preacher=$request->preacher;
           $livestream->status=true;
   
           if($livestream->save()) {
               
           
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
    public function go_live()
    {
       
        $livestream=Livestream::where('status', '=',true)->orderBy('created_at', 'asc')->first();
        //$count=count($livestreams);
      if($livestream !=null)
      {
        $count=1;
      }
      else
        $count=0;

        return view('livestreams.go_live')->with(['livestream'=>$livestream,'count'=>$count]);
        
       
    }
    public function stop_transmission(Request $request)
    {
        $livestream = Livestream::find($request->livestream_id);
        $livestream->status=false;
        if($livestream->save())
        {
          return back()->with('success','Update successful');
       }

    }
    public function live()
    {
        $live=Livestream::where('status', '=',true)->orderBy('created_at', 'asc')->first();
        //$count=count($livestreams);
      if($live !=null)
      {
        $count=1;
      }
      else
        $count=0;

        return view('livestreams.live')->with(['live'=>$live,'count'=>$count]);

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
             'program'=>'required',
            'link'=>'required',
            'preacher'=>'required',
           
           ]);

           $livestream = Livestream::find($id);
          
           $livestream->title=$request->title;
           $livestream->program=$request->program;
           $livestream->link=$request->link;
           $livestream->preacher=$request->preacher;

           if($livestream->save())
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
        if( $livestream = Livestream::findOrFail($id))
        {
            $livestream->delete();
            return back()->with('success','Deleted successfully');
        
        }
       else{
        return back()->with('error','does not exist');
     }

    }
}
