<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
    }

    public function component_button()
    {
        return view('component_button');
    }
    public function component_card()
    {
        return view('component_card');
    }
    
    public function utilities_color()
    {
        return view('utilities_color');
    }
    public function utilities_border()
    {
        return view('utilities_border');
    }
    public function utilities_animation()
    {
        return view('utilities_animation');
    }

    public function utilities_other()
    {
        return view('utilities_other');
    }

    public function login_page()
    {
        return view('login_page');
    }
    
    public function register()
    {
        return view('register');
    }

    public function forgot_password()
    {
        return view('forgot_password');
    }

    public function blank_page()
    {
        return view('blank_page');
    }

    public function chart()
    {
        return view('chart');
    }

    public function table()
    {
        return view('table');
    }
}
