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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function tampilregismitra()
    {
      return view('/auth/register_mitra');
    }

    public function tampilregispelamar()
    {
      return view('/auth/register_pelamar');
    }
    public function login()
    {
      return view('/auth/login');
    }
}
