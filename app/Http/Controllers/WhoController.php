<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Who;

class WhoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whos = Who::all();
        return view('admin.whoweare.index',compact(
            'whos'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.whoweare.create');
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
            'who_details'=>'required',
            'who_image'=>'required'
        ]);

        $who = new Who();

        $who->who_details = $request->input('who_details');
                
        $img = $request->file('who_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/who");
            $img->move($path, $name);
            $who->who_image = $name;
        }

        $who->save();

        return redirect()->route('who')->with('msg','Who We Are Section Created Successfully');
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
        $who = Who::find($id);
        return view('admin.whoweare.edit', compact('who'));
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
            'who_details'=>'required'
        ]);

        $who = Who::find($id);

        $who->who_details = $request->input('who_details');
                
        $img = $request->file('who_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/who");
            $img->move($path, $name);
            $who->who_image = $name;
        }

        $who->save();

        return redirect()->route('who')->with('msg','Who We Are Section Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("whos")->where('id',$id)->delete();
        return redirect()->route('who')
            ->with('msg','Who We Are Section deleted successfully');
    }
}
