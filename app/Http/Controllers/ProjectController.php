<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use DB;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project_post = Project::all();
        return view('admin.project.index', compact('project_post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
            'project_type'=>'required',
            'project_name'=>'required',
            'details'=>'required'
        ]);

        $project_create = new Project();

        
        $project_create->project_type = $request->input('project_type');
        
        $project_create->project_name = $request->input('project_name');
        
        $project_create->details = $request->input('details');

        $project_create->save();

        return redirect()->route('project')->with('msg','Project Successfully Created');
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
        $project = Project::find($id);
        return view('admin.project.edit', compact('project'));
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
            'project_type'=>'required',
            'project_name'=>'required',
            'details'=>'required'
        ]);

        $project_create = Project::find($id);

        
        $project_create->project_type = $request->input('project_type');
        
        $project_create->project_name = $request->input('project_name');
        
        $project_create->details = $request->input('details');

        $project_create->save();

        return redirect()->route('project')->with('msg','Project Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("projects")->where('id',$id)->delete();
        return redirect()->route('project')->with('msg','Project deleted successfully');
    }
}
