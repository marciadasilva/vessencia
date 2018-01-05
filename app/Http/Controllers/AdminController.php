<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function index(){
    $admin = true;
    return view('admin.index', compact('admin'));
  }

  public function help(){
    $admin = true;
    return view('admin.help', compact('admin'));
  }
}
