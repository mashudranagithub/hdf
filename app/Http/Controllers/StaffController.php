<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use DB;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all();
        return view('admin.staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.staff.create');
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
            'name'=>'required',
            'image'=>'required',
            'designation'=>'required'
        ]);

        $staff_create = new Staff();

        
        $staff_create->name = $request->input('name');
        
        $staff_create->designation = $request->input('designation');
        
        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/staffs");
            $img->move($path, $name);
            $staff_create->image = $name;
        }

        $staff_create->save();

        return redirect()->route('staff')->with('msg','Staff Successfully Created');
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
        $staff = Staff::find($id);
        return view('admin.staff.edit', compact('staff'));
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

        $staff_create = Staff::find($id);

        
        $staff_create->name = $request->input('name');
        
        $staff_create->designation = $request->input('designation');
        
        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/staffs");
            $img->move($path, $name);
            $staff_create->image = $name;
        }

        $staff_create->save();

        return redirect()->route('staff')->with('msg','Staff Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("staff")->where('id',$id)->delete();
        return redirect()->route('staff')
            ->with('msg','Staff deleted successfully');
    }
}
