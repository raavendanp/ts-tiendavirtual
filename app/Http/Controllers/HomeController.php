<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.index');
    }
    public function goindex()
    {
        return view('/index');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function home()
    {
        return view('/home');
    }

    public function changeLang($locale)
    {
        Session::put('applocale',$locale);
        return redirect()->route('pages.index');
    }

}
