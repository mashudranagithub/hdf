<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nobin;
use DB;

class NobinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nobin_images = Nobin::all();
        return view('admin.nobin.index', compact(
            'nobin_images'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nobin.create');
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
            'nobin_image'=>'required',
            'nobin_pdf'=>'required'
        ]);

        $nobin_post = new Nobin();
                
        $img = $request->file('nobin_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/publication/nobin");
            $img->move($path, $name);
            $nobin_post->nobin_image = $name;
        }
                
        $pdf = $request->file('nobin_pdf');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/publication/nobin");
            $pdf->move($path, $name);
            $nobin_post->nobin_pdf = $name;
        }

        $nobin_post->save();

        return redirect()->route('nobin')->with('msg','Nobin Post Created Successfully');
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
        $nobin = Nobin::find($id);
        return view('admin.nobin.edit', compact(
            'nobin'
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
            'nobin_image'=>'required',
            'nobin_pdf'=>'required'
        ]);

        $nobin_post = Nobin::find($id);
                
        $img = $request->file('nobin_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/publication/nobin");
            $img->move($path, $name);
            $nobin_post->nobin_image = $name;
        }
                
        $pdf = $request->file('nobin_pdf');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/publication/nobin");
            $pdf->move($path, $name);
            $nobin_post->nobin_pdf = $name;
        }

        $nobin_post->save();

        return redirect()->route('nobin')->with('msg','Nobin Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("nobins")->where('id',$id)->delete();
        return redirect()->route('nobin')
            ->with('msg','Nobin Post deleted successfully');
    }
}
