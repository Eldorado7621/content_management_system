<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if ($contacts=Contact::all())
        {
            return view('contact.index')->with('contacts',$contacts);
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
            'phn_no' => 'required',
             'address'=>'required',
            'email'=>'required'
           ]);

           $contact=new Contact();
		
           $contact->phn_no=$request->phn_no;
           $contact->address=$request->address;
           $contact->email=$request->email;
   
           if($contact->save()) {
               
              
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
        $contact = Contact::find($id);

        $contact->phn_no = $request->phn_no;
        $contact->address = $request->address;
        $contact->email = $request->email;
        if($contact->save())
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
        if( $contact = Contact::findOrFail($id))
        {
             $contact->delete();
             return back()->with('success',' Deleted successfully');
         }
          else{
              return back()->with('error','Error');
           }
    }
}
