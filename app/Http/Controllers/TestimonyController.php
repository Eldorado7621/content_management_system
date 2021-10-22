<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimony;

class TestimonyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if ($testimonys=Testimony::all())
        {
            return view('testimony.index')->with('testimonys',$testimonys);
        }

       
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
            'name' => 'required',
             'testimony'=>'required',
            'proffession'=>'required'
           ]);

           $testimony=new Testimony();
		
           $testimony->name=$request->name;
           $testimony->testimony=$request->testimony;
           $testimony->proffession=$request->proffession;
   
           if($testimony->save()) {
               
              
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
        $testimony = Testimony::find($id);

        $testimony->name = $request->name;
        $testimony->testimony = $request->testimony;
        $testimony->proffession = $request->proffession;
        if($testimony->save())
        {
            return back()->with('success','Update successful');
        }
        else
        {
            return back()->with('error','Could not upload file');
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
        if( $testimony = Testimony::findOrFail($id))
        {
             $testimony->delete();
             return back()->with('success',' Deleted successfully');
         }
          else{
              return back()->with('error','Error');
           }
       
    }
}
