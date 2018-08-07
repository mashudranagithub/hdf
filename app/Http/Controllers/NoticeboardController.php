<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticeboard;
use DB;

class NoticeboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notice_post = Noticeboard::all()->sortByDesc("id");;
        
        return view('admin.notice.index', compact('notice_post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.create');
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
            'notice_title'=>'required',
            'notice_image'=>'required'
        ]);

        $notice_post = new Noticeboard();

        $notice_post->notice_title = $request->input('notice_title');
                
        $img = $request->file('notice_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/notices");
            $img->move($path, $name);
            $notice_post->notice_image = $name;
        }
                
        $pdf = $request->file('application_form');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/application_form");
            $pdf->move($path, $name);
            $notice_post->application_form = $name;
        }

        $notice_post->save();

        return redirect()->route('noticeboard')->with('msg','Notice Post Created Successfully');
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
        $notice_post = Noticeboard::find($id);
        return view('admin.notice.edit', compact('notice_post'));
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
            'notice_title'=>'required'
        ]);

        $notice_post = Noticeboard::find($id);

        $notice_post->notice_title = $request->input('notice_title');
                
        $img = $request->file('notice_image');

        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/notices");
            $img->move($path, $name);
            $notice_post->notice_image = $name;
        }
        
        $pdf = $request->file('application_form');

        if($pdf){
            $name = $pdf->getClientOriginalName();
            $path = public_path("/pdf/application_form");
            $pdf->move($path, $name);
            $notice_post->application_form = $name;
        }

        $notice_post->save();

        return redirect()->route('noticeboard')->with('msg','Notice Post Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("noticeboards")->where('id',$id)->delete();
        return redirect()->route('noticeboard')
            ->with('msg','Notice Post deleted successfully');
    }
}
