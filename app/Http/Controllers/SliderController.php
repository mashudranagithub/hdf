<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use DB;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'slider_text'=>'required',
            'slider_image'=>'required'
        ]);

        $slider = new Slider();

        $slider->slider_text = $request->input('slider_text');
                
        $img = $request->file('slider_image');
        
        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/slider");
            $img->move($path, $name);
            $slider->slider_image = $name;
        }

        $slider->save();

        return redirect()->route('sliders')->with('msg', 'Slider Created Successfully.');
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
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
            'slider_text'=>'required'
        ]);

        $slider = Slider::find($id);

        $slider->slider_text = $request->input('slider_text');
                
        $img = $request->file('slider_image');
        
        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/slider");
            $img->move($path, $name);
            $slider->slider_image = $name;
        }

        $slider->save();

        return redirect()->route('sliders')->with('msg', 'Slider Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("sliders")->where('id',$id)->delete();
        return redirect()->route('sliders')
            ->with('msg','Slider deleted successfully');
    }
}
