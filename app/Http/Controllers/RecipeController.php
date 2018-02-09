<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;

class RecipeController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function showRecipe(){
      $recipes = Recipe::latest()->get();
      $admin = true;
      return view('admin.recipe', compact(['admin', 'recipes']));
    }

    public function createRecipe() {
      $admin = true;
      $categories = Category::latest()->get();

      return view('admin.create-recipe', compact(['admin', 'categories']));
    }

    public function storeRecipe() {
      Session::put('title-recipe', request('title'));
      Session::put('subtitle-recipe', request('subtitle'));
      Session::put('ingredients-recipe', request('editor1'));
    }
}
