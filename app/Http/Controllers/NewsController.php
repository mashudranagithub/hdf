<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = News::first();
        return view('admin.news.create', compact( 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'news_details'=>'required',
            'news_image'=>'required'
        ]);

        $news = News::first();

        $news->news_details = $request->input('news_details');
                
        $img = $request->file('news_image');
        
        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/news");
            $img->move($path, $name);
            $news->news_image = $name;
        }

        $news->save();

        return redirect()->route('newsCreate')->with('msg', 'News Updated Successfully.');
    }
    
}
