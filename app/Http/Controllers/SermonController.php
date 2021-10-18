<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Models\Sermon;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sermon= Sermon::all();
        return view('sermon.index')->with('sermon',$sermon);

    }
    public function view_all()
    {
        //
        $sermons= Sermon::paginate(1);
        return view('sermon.sermons_page')->with('sermons',$sermons);

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
            'file' => 'required|mimes:mp3',
            'thumbnail' => 'required|mimes:jpg,jpeg,png,gif|dimensions:min_width=200,min_height=200,max_width=600,max_height=600',
            'preacher'=>'required',
            'title'=>'required'
           ]);
        
        $split_title=explode(" ",$request->title);
        $new_title="";
        //
        foreach($split_title as $title)
        {
            $new_title = $new_title.$title."_";
        }
        $file = $request->file('file');
        $name =$new_title.Str::random(5);
        $file_url = \Storage::putFileAs('sermons/audio', $file, $name . '.' . $file->extension());

        $thumbnail = $request->file('thumbnail');
        $name_thumbnail = Str::random(25);
        $thumbnail_url = \Storage::putFileAs('sermons/thumbnail', $thumbnail, $name_thumbnail . '.' . $thumbnail->extension());

        $sermon=new Sermon();
		
		$sermon->file=$file_url;
        $sermon->thumbnail=$thumbnail_url;
        $sermon->title=$request->title;
        $sermon->preacher=$request->preacher;
		$sermon->user_id=Auth::user()->id;

		if($sermon->save()) {
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $sermon = Sermon::findOrFail($id);
       // $sermon->delete();
        if(\File::exists(public_path($sermon->file))){
            \File::delete(public_path($sermon->file));
           
            if(\File::exists(public_path($sermon->thumbnail))){
                \File::delete(public_path($sermon->thumbnail));
                }
                $sermon->delete();
            }
            else{
                return back()->with('error','File does not exist');
            }
        return back()->with('success','File Deleted successfully');
    }
}
