<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homeproject;

class HomeProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_post = Homeproject::all();
        return view('admin.homeprojects.index',
                   compact('project_post')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homeprojects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'projectname'=>'required',
            'image'=>'required',
            'details'=>'required'
        ]);

        $project_post = new Homeproject();

        $project_post->projectname = $request->input('projectname');
        
        $project_post->details = $request->input('details');

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/homeprojects");
            $img->move($path, $name);
            $project_post->image = $name;
        }

        $project_post->save();

        return redirect()->route('homeproject')->with('msg','Home Project Successfully Created');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project_post = Homeproject::find($id);
        return view('admin.homeprojects.edit', compact(
            'project_post'
        ));
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
        $this->validate($request,[
            'projectname'=>'required',
            'details'=>'required'
        ]);

        $project_post = Homeproject::find($id);

        $project_post->projectname = $request->input('projectname');
        
        $project_post->details = $request->input('details');

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/homeprojects");
            $img->move($path, $name);
            $project_post->image = $name;
        }

        $project_post->save();

        return redirect()->route('homeproject')->with('msg','Home Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("homeprojects")->where('id',$id)->delete();
        return redirect()->route('homeproject')
            ->with('success','Home Project deleted successfully');
    }
}
