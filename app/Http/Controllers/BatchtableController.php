<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Batch;
use App\Batchtable;
use DB;

class BatchtableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $batchdata = Batchtable::all();
        return view('admin.batchtable.index', compact('batchdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $batch_name = Batch::all();
        return view('admin.batchtable.create', compact('batch_name'));
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
            'batch_name'=>'required',
            'name'=>'required',
            'image'=>'required',
            'membership_no'=>'required',
            'degree'=>'required',
            'present_professional_status'=>'required'
        ]);

        $member_create = new Batchtable;

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/batchmembers");
            $img->move($path, $name);
            $member_create->image = $name;
        }


        $member_create->batch_name = $request->input('batch_name');
        $member_create->name = $request->input('name');
        $member_create->membership_no = $request->input('membership_no');
        $member_create->degree = $request->input('degree');
        $member_create->present_professional_status = $request->input('present_professional_status');
        
        $member_create->save();

        return redirect()->route('batchtable')->with('msg','Batch Member Created Successfully');
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
        $batch_name = Batch::all();
        $batch_member = Batchtable::find($id);
        return view('admin.batchtable.edit', compact('batch_member','batch_name'));
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
            'batch_name'=>'required',
            'name'=>'required',
            'membership_no'=>'required',
            'degree'=>'required',
            'present_professional_status'=>'required'
        ]);

        $member_create = Batchtable::find($id);

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/batchmembers");
            $img->move($path, $name);
            $member_create->image = $name;
        }


        $member_create->batch_name = $request->input('batch_name');
        $member_create->name = $request->input('name');
        $member_create->membership_no = $request->input('membership_no');
        $member_create->degree = $request->input('degree');
        $member_create->present_professional_status = $request->input('present_professional_status');
        
        $member_create->save();

        return redirect()->route('batchtable')->with('msg','Batch Member Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("batchtables")->where('id',$id)->delete();
        return redirect()->route('batchtable')
            ->with('msg','Batch Member deleted successfully');
    }
}
