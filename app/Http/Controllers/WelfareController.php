<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Welfare;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class WelfareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $welfares=Welfare::all();
        return view('welfare.index')->with('welfares',$welfares);
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
             'details'=>'required',
            'date'=>'required',
            'image' => 'required|mimes:jpg,jpeg,png,gif|dimensions:min_width=200,min_height=200,max_width=600,max_height=600'
          
           ]);

           $file = $request->file('image');
           $name = Str::random(15);
           $url = \Storage::putFileAs('images/welfare', $file, $name . '.' . $file->extension());
   
           $welfare=new welfare();
		
           $welfare->title=$request->title;
           $welfare->details=$request->details;
           $welfare->date=$request->date;
           $welfare->image=$url;
           $welfare->user_id=Auth::user()->id;
   
           if($welfare->save()) {
               
              
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
        $this->validate($request, [
            'title' => 'required',
             'details'=>'required',
            'date'=>'required',
             
           ]);

           $welfare = Welfare::find($id);
           if( $request->image!=null)
           {
               
            if(\File::exists(public_path($welfare->image))){
                \File::delete(public_path($welfare->image));
                }

          //  $file = $request->image;
            $file = $request->file('image');
          
             $name = Str::random(15);
            $url = \Storage::putFileAs('images/welfare', $file, $name . '.' . $file->extension());
           }
           else{
            $url=$welfare->image;
         
           }
          
         

            $welfare->image = $url;
            $welfare->title = $request->title;
           $welfare->date = $request->date;
           $welfare->details = $request->details;
           if($welfare->save())
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
        if( $welfare = Welfare::findOrFail($id))
    {
        if(\File::exists(public_path($welfare->image))){
            \File::delete(public_path($welfare->image));
           
            
                $welfare->delete();
                return back()->with('success','Deleted successfully');
            }
            else{
                $welfare->delete();
                return back()->with('error',' does not exist');
            }
    }
    else{
        return back()->with('error','does not exist');
     }
    }

    public function view_welfare()
    {
        $welfares=Welfare::all();
        return view('welfare.view_welfare')->with('welfares',$welfares);
    }
}
