<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallary;
use DB;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallary_post = Gallary::all();
        return view('admin.gallary.index', compact(
            'gallary_post'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallary.create');
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
            'gallary_name'=>'required',
            'gallary_image'=>'required'
        ]);

        $gallary_post = new Gallary();

        $gallary_post->gallary_name = $request->input('gallary_name');

        $img = $request->file('gallary_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/gallary");
            $img->move($path, $name);
            $gallary_post->gallary_image = $name;
        }

        $gallary_post->save();

        return redirect()->route('gallary')->with('msg','Gallary Image Uploaded Successfully');
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
        $image = Gallary::find($id);
        return view('admin.gallary.edit', compact(
            'image'
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
            'gallary_name'=>'required',
            'gallary_image'=>'required'
        ]);

        $gallary_post = Gallary::find($id);

        $gallary_post->gallary_name = $request->input('gallary_name');

        $img = $request->file('gallary_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/gallary");
            $img->move($path, $name);
            $gallary_post->gallary_image = $name;
        }

        $gallary_post->save();

        return redirect()->route('gallary')->with('msg','Gallary Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("gallaries")->where('id',$id)->delete();
        return redirect()->route('gallary')
            ->with('msg','Gallary Image deleted successfully');
    }
}
