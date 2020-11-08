<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterMitraController extends Controller
{
  public function tampilregismitra()
  {
      return view('auth.register_mitra');
  }
  public function tampilregispelamar()
  {
      return view('auth.register_pelamar');
  }
}
