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

    public function getTokens()
    {
        return view('home.personal-tokens');
    }

    public function getAuthorizedClients()
    {
        return view('home.authorized-clients');
    }


    public function getClients()
    {
        return view('home.personal-clients');
    }

}
