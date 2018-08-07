<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homemanagement;
use DB;

class HomeManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $management_post = Homemanagement::all();
        return view('admin.homemanagement.index',
                   compact('management_post')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homemanagement.create');
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
            'image'=>'required',
            'name'=>'required',
            'designation'=>'required'
        ]);

        $management_post = new Homemanagement();
        
        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/homemanagement");
            $img->move($path, $name);
            $management_post->image = $name;
        }

        $management_post->name = $request->input('name');
        
        $management_post->designation = $request->input('designation');

        $management_post->save();

        return redirect()->route('homemanagement')->with('msg','Home Management Successfully Created');
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
        $management_post = Homemanagement::find($id);
        return view('admin.homemanagement.edit', compact(
            'management_post'
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
            'name'=>'required',
            'designation'=>'required'
        ]);

        $management_post = Homemanagement::find($id);
        
        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/homemanagement");
            $img->move($path, $name);
            $management_post->image = $name;
        }

        $management_post->name = $request->input('name');
        
        $management_post->designation = $request->input('designation');

        $management_post->save();

        return redirect()->route('homemanagement')->with('msg','Home Management Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("homemanagements")->where('id',$id)->delete();
        return redirect()->route('homemanagement')
            ->with('success','Home Management deleted successfully');
    }
}
