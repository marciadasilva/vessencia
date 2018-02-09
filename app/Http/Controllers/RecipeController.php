<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;
use Session;
use Alert;

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
      Session::put('category_id-recipe', request('category_id'));
      Session::put('time_preparation-recipe', request('time_preparation'));
      Session::put('yield-recipe', request('yield'));
      Session::put('ingredients-recipe', request('editor1'));
      Session::put('instructions-recipe', request('editor1'));

      $this->validate(request(), [
        'title' => 'required',
        'subtitle' => 'required',
        'ingredients' => 'required',
        'instructions' => 'required',
        'category_id' => 'required',
        'time_preparation' => 'required',
        'yield' => 'required',
      ]);

      $dados = request()->all();

      if(request()->hasFile('image')){
        $imagem = request()->file('image');
        $num = rand(1111, 9999);
        $dir = "img/recipe/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir, $nomeImagem);

        $dados['image'] = $dir . "/" . $nomeImagem;
      }

      Recipe::create($dados);
      Alert::success('A receita foi cadastrada com sucesso!', 'Sucesso')->persistent('Close');
      return redirect()->route('recipe');
    }
}
