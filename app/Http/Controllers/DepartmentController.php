<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
use Illuminate\Support\Str;


class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $depts= Department::all();
        return view('dept.index')->with('depts',$depts);

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
            'desc' => 'required',
            'passage' => 'required',
            'reference' => 'required',
            'deptBanner' => 'required|mimes:jpg,jpeg,png,gif'
           
           ]);

           $file = $request->file('deptBanner');
           $name = Str::random(15);
           $url = \Storage::putFileAs('images/Deptbanner', $file, $name . '.' . $file->extension());

           $dept=new Department();
		
           $dept->name=$request->name;
           $dept->description=$request->desc;
           $dept->reference=$request->reference;
           $dept->bible=$request->passage;
           $dept->img=$url;
   
           if($dept->save()) {
               
              
               return back()->with(['success'=>'Department created successfully']);
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
    public function deptDetails($id)
    {
        //
        if( $depts = Department::findOrFail($id))
        {
           
            return view('departmentDetails')->with('depts',$depts);
        }
        else
         return back()->with('error','Not available');
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
            'name' => 'required',
            'name' => 'required',
            'desc' => 'required',
            'passage' => 'required',
            'reference' => 'required',
            
           ]);
        $dept = Department::find($id);

       
        $dept->name=$request->name;
        $dept->description=$request->desc;
        $dept->reference=$request->reference;
        $dept->bible=$request->passage;
       
        if($dept->save())
        {
            return back()->with('success','Update successful');
        }
        else
         {
            return back()->with('error','Unable to Update');   
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
        if( $dept = Department::findOrFail($id))
        {
          
            $dept->delete();
            
          return back()->with('success','Department Deleted successfully');
         }
         else
         {
            return back()->with('error','Unable to Delete Department ');   
         }
    }

    public function updateBanner(Request $request)
    {
       
        $this->validate($request, [
            
            'deptBanner' => 'required|mimes:jpg,jpeg,png,gif',
            'id'=>'required',
           ]);
        $id=$request->id;

        if( $dept = Department::findOrFail($id))
        {
         
          if(\File::exists(public_path($dept->img))){
            \File::delete(public_path($dept->img));

           $file = $request->file('deptBanner');
           $name = Str::random(15);
           $url = \Storage::putFileAs('images/Deptbanner', $file, $name . '.' . $file->extension());


            $dept->img=$url;
            if($dept->save())
            {
                return back()->with('success','Update successful');
            }
            else
             {
                return back()->with('error','Unable to Update');   
             }
            }
            else{
                $file = $request->file('deptBanner');
                $name = Str::random(15);
                $url = \Storage::putFileAs('images/Deptbanner', $file, $name . '.' . $file->extension());
     
                 $dept->img=$url;

                 if($dept->save())
                 {
                     return back()->with('success','Update successful');
                 }
                 else
                  {
                     return back()->with('error','Unable to Update');   
                  }
            }
      }
      else
      {
         return back()->with('error','File not found');   
      }
      
    }
}
