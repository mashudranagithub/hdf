<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Settings;

class SettingsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Settings::first();
        return view('admin.settings.create', compact( 'data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request,[
            'email'=>'required',
            'phone'=>'required',
            'address'=>'required'
        ]);
        
//        dd($request);

        $settings = Settings::first();

        $settings->email = $request->input('email');

        $settings->phone = $request->input('phone');

        $settings->address = $request->input('address');
                
        $img = $request->file('logo');
        
        if($img){
            $name = $img->getClientOriginalName();
            $path = public_path("/frontend/images/logo");
            $img->move($path, $name);
            $settings->logo = $name;
        }

        $settings->facebook = $request->input('facebook');
        $settings->twitter = $request->input('twitter');
        $settings->linkedin = $request->input('linkedin');
        $settings->google_plus = $request->input('google_plus');
        $settings->youtube = $request->input('youtube');

        $settings->save();

        return redirect()->route('settingsCreate')->with('msg', 'Settings Updated Successfully.');
    }
}
