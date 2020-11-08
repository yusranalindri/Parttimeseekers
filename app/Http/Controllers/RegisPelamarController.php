<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisPelamarController extends Controller
{
  public function tampilregispelamar()
  {
      return view('auth.register_pelamar');
  }
}
