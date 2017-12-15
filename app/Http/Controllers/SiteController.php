<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;

class SiteController extends Controller
{
  public function index(){
    $categories = Category::latest()->get();
    return view('index', compact('categories'));
  }

  public function menus(){
    $menus = Menu::latest()->get();
    return view('menus', compact('menus'));
  }

  public function menu(Category $category){
    $menus = Menu::where('category_id', '=', $category->id)->latest()->get();
    return view('menus', compact('menus'));
  }

  public function contact(){
    return view('contact');
  }

}
