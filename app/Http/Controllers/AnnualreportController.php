<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Annualreport;
use DB;

class AnnualreportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annual_images = Annualreport::all();
        return view('admin.annualreport.index', compact('annual_images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.annualreport.create');
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
            'annual_image'=>'required',
            'annual_pdf'=>'required'
        ]);

        $annual_post = new Annualreport();
                
        $img = $request->file('annual_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/publication/annual");
            $img->move($path, $name);
            $annual_post->annual_image = $name;
        }
                
        $pdf = $request->file('annual_pdf');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/publication/annual");
            $pdf->move($path, $name);
            $annual_post->annual_pdf = $name;
        }

        $annual_post->save();

        return redirect()->route('annualreport')->with('msg','Annual Report Post Created Successfully');
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
        $annual_post = Annualreport::find($id);
        return view('admin.annualreport.edit', compact('annual_post'));
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
            'annual_image'=>'required'
        ]);

        $annual_post = Annualreport::find($id);
                
        $img = $request->file('annual_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/publication/annual");
            $img->move($path, $name);
            $annual_post->annual_image = $name;
        }
                
        $pdf = $request->file('annual_pdf');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/publication/annual");
            $pdf->move($path, $name);
            $annual_post->annual_pdf = $name;
        }

        $annual_post->save();

        return redirect()->route('annualreport')->with('msg','Annual Report Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("annualreports")->where('id',$id)->delete();
        return redirect()->route('annualreport')
            ->with('msg','Annual Report Post deleted successfully');
    }
}
