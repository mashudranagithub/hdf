<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aboutmember;
use DB;

class AboutMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_members = Aboutmember::all();
        return view('admin.aboutmembers.index', compact(
            'all_members'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutmembers.create');
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
            'member_type'=>'required',
            'image'=>'required',
            'details'=>'required'
        ]);

        $member_create = new Aboutmember();

        $member_create->name = $request->input('name');
        
        $member_create->member_type = $request->input('member_type');
        
        $member_create->details = $request->input('details');

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/aboutpage/members");
            $img->move($path, $name);
            $member_create->image = $name;
        }

        $member_create->save();

        return redirect()->route('aboutmember')->with('msg','Member Successfully Created');
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
        $member = Aboutmember::find($id);
        return view('admin.aboutmembers.edit', compact(
            'member'
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
            'member_type'=>'required'
        ]);

        $member_create = Aboutmember::find($id);

        $member_create->name = $request->input('name');
        
        $member_create->member_type = $request->input('member_type');
        
        $member_create->details = $request->input('details');

        $img = $request->file('image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/aboutpage/members");
            $img->move($path, $name);
            $member_create->image = $name;
        }

        $member_create->save();

        return redirect()->route('aboutmember')->with('msg','Member Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("aboutmembers")->where('id',$id)->delete();
        return redirect()->route('aboutmember')
            ->with('msg','Member deleted successfully');
    }
}
