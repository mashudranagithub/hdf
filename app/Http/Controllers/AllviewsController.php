<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticeboard;
use App\Settings;
use App\News;
use App\Nobin;
use App\Slider;
use App\Who;
use App\Aboutmember;
use App\Project;
use App\Staff;
use App\Batch;
use App\Batchtable;
use App\Annualreport;
use DB;

class AllviewsController extends Controller
{
    //For Homepage View
    public function homepage(){
        $settings = Settings::first();
        $news = News::first();
        $sliders = Slider::all();
        $notices = DB::table('noticeboards')->orderBy('id', 'desc')->limit(4)->get();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $who = Who::first();
        $homepageproject = DB::table('homeprojects')->orderBy('id', 'asc')->limit(3)->get();
        $homepagemanagement = DB::table('homemanagements')->orderBy('id', 'asc')->limit(4)->get();
        return view('index', compact(
            'settings',
            'sliders',
            'notices',
            'top_slide_notice',
            'news',
            'who',
            'homepageproject',
            'homepagemanagement'
        ));
    }
    
    //For About Page View
    public function aboutus(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        
        $main_management = DB::table('aboutmembers')->where('member_type', '=', 'main_management')->orderBy('id', 'asc')->get();
        $present_governing_board = DB::table('aboutmembers')->where('member_type', '=', 'present_governing_board')->orderBy('id', 'asc')->get();
        $sponsor_membership = DB::table('aboutmembers')->where('member_type', '=', 'sponsor_membership')->orderBy('id', 'asc')->get();
        $govt_official_membership = DB::table('aboutmembers')->where('member_type', '=', 'govt_official_membership')->orderBy('id', 'asc')->get();
        $private_membership = DB::table('aboutmembers')->where('member_type', '=', 'private_membership')->orderBy('id', 'asc')->get();
        $social_membership = DB::table('aboutmembers')->where('member_type', '=', 'social_membership')->orderBy('id', 'asc')->get();
        $lest_forget = DB::table('aboutmembers')->where('member_type', '=', 'lest_forget')->orderBy('id', 'asc')->get();
        $first_ten_sponsors = DB::table('aboutmembers')->where('member_type', '=', 'first_ten_sponsors')->orderBy('id', 'asc')->get();
        $staffs = Staff::all();
        
        return view('pages.aboutus', compact(
            'settings',
            'top_slide_notice',
            'main_management',
            'present_governing_board',
            'sponsor_membership',
            'govt_official_membership',
            'private_membership',
            'social_membership',
            'lest_forget',
            'first_ten_sponsors',
            'staffs'
        ));
    }
    
    //For Contact Us Page View
    public function contactus(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        return view('pages.contactus', compact(
            'settings',
            'top_slide_notice'
        ));
    }
    
    //For Annual Report Page View
    public function annualreport(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $annualreport = Annualreport::all();
        return view('pages.annualreport', compact(
            'settings',
            'top_slide_notice',
            'annualreport'
        ));
    }
    
    //For Nobin Page View
    public function nobin(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $nobin = Nobin::all();
        return view('pages.nobin', compact(
            'settings',
            'top_slide_notice',
            'nobin'
        ));
    }
    
    //For Tas Project page View
    public function tasproject(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $project = Project::all()->where('project_type', '=', 'tas');
        $batches = Batch::all();
        $batch_members = Batchtable::all();
        
        return view('pages.tas', compact(
            'settings',
            'top_slide_notice',
            'project',
            'table_data',
            'batches',
            'batch_members'
        ));
    }
    
    //For Ruslep Project Page View
    public function ruslepproject(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $project = Project::all()->where('project_type', '=', 'ruslep');
        return view('pages.ruslep', compact(
            'settings',
            'top_slide_notice',
            'project'
        ));
    }
    
    //For Supporting Project page View
    public function supportingproject(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $project = Project::all()->where('project_type', '=', 'supporting');
        return view('pages.supportingproject', compact(
            'settings',
            'top_slide_notice',
            'project'
        ));
    }
    
    //For Management Gallary Page View
    public function managementgallary(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $images = DB::table('gallaries')->where('gallary_name', '=', 'management')->orderBy('id', 'desc')->get();
        return view('pages.managementgallary', compact(
            'settings',
            'top_slide_notice',
            'images'
        ));
    }
    
    //For Tas Gallary Page View
    public function tasgallary(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $images = DB::table('gallaries')->where('gallary_name', '=', 'tas')->orderBy('id', 'desc')->get();
        return view('pages.tasgallary', compact(
            'settings',
            'top_slide_notice',
            'images'
        ));
    }
    
    //For Ruslep Gallary Page View
    public function ruslepgallary(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $images = DB::table('gallaries')->where('gallary_name', '=', 'ruslep')->orderBy('id', 'desc')->get();
        return view('pages.ruslepgallary', compact(
            'settings',
            'top_slide_notice',
            'images'
        ));
    }
    
    //For Supporting Project Gallary Page View
    public function supportinggallary(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $images = DB::table('gallaries')->where('gallary_name', '=', 'supporting')->orderBy('id', 'desc')->get();
        return view('pages.supportinggallary', compact(
            'settings',
            'top_slide_notice',
            'images'
        ));
    }
    
    //For Noticeboard Page View
    public function noticeboard(){
        $settings = Settings::first();
        $top_slide_notice = DB::table('noticeboards')->orderBy('id', 'desc')->limit(1)->get();
        $notices = DB::table('noticeboards')->orderBy('id', 'desc')->get();
        return view('pages.noticeboard', compact(
            'settings',
            'notices',
            'top_slide_notice'
        ));
    }
    
}
