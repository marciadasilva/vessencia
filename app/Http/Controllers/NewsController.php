<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function showNews(){
      $news = News::latest()->paginate(8);
      $admin = true;
      return view('admin.news', compact(['admin', 'news']));
    }

    public function createNews(){
      $admin = true;
      return view('admin.create-news', compact(['admin']));
    }


}
