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
		// [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
		$this->middleware('localeSessionRedirect');
		$this->middleware('localizationRedirect');
		$this->middleware('localeViewPath');
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		// return redirect('clients');
        return view('home');
    }
}
