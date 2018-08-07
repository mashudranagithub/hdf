<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticeboard;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = DB::table('noticeboards')->orderBy('id', 'desc')->limit(2)->get();
        return view('admin.index', compact(
            'notices'
        ));
    }
}
