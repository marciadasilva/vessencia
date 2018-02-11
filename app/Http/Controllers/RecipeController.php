<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Category;
use Session;
use Alert;
use Purifier;

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
      Session::put('ingredients-recipe', request('body'));
      Session::put('instructions-recipe', request('instructions'));

      $this->validate(request(), [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required', //ingredients
        'instructions' => 'required',
        'category_id' => 'required',
        'time_preparation' => 'required',
        'yield' => 'required',
      ]);

      $dados['title'] = request('title');
      $dados['subtitle'] = request('subtitle');
      $dados['body'] = Purifier::clean(request('body'));
      $dados['instructions'] = Purifier::clean(request('instructions'));
      $dados['category_id'] = request('category_id');
      $dados['time_preparation'] = request('time_preparation');
      $dados['yield'] = request('yield');
      // $dados[''] = Purifier::clean(request());
      // $dados = Purifier::clean(request()->all());

      if(request()->hasFile('image')) {
        $imagem = request()->file('image');
        $num = rand(1111, 9999);
        $dir = "img/recipe/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir, $nomeImagem);

        $dados['image'] = $dir . "/" . $nomeImagem;
      }

      if(request('video')){
          $url = request('video');
          $urlExplode = explode('=', $url);
          $embed = 'https://www.youtube.com/embed/' . $urlExplode[1];
          $dados['video'] = $embed;
      }

      Recipe::create($dados);
      Alert::success('A receita foi cadastrada com sucesso!', 'Sucesso')->persistent('Close');
      return redirect()->route('recipes');
    }

    public function updateRecipe(Recipe $recipe) {
      $admin = true;
      $categories = Category::latest()->get();

      return view('admin.edit-recipe', compact(['admin', 'recipe', 'categories']));
    }

    public function storeUpdateRecipe(Recipe $recipe) {
      Session::put('title-recipe-edit', request('title'));
      Session::put('subtitle-recipe-edit', request('subtitle'));
      Session::put('category_id-recipe-edit', request('category_id'));
      Session::put('time_preparation-recipe-edit', request('time_preparation'));
      Session::put('yield-recipe-edit', request('yield'));
      Session::put('ingredients-recipe-edit', request('body'));
      Session::put('instructions-recipe-edit', request('instructions'));

      $this->validate(request(), [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required', //ingredients
        'instructions' => 'required',
        'category_id' => 'required',
        'time_preparation' => 'required',
        'yield' => 'required',
      ]);

      $dados = Purifier::clean(request()->all());

      if(request()->hasFile('image')){
        $imagem = request()->file('image');
        $num = rand(1111, 9999);
        $dir = "img/recipe/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir, $nomeImagem);

        $imageToRemove = Recipe::where('id', $recipe->id)->first()->image;
        unlink($imageToRemove);
        $dados['image'] = $dir . "/" . $nomeImagem;
      }else{
        $imagedb = Recipe::where('id', $recipe->id)->first()->image;
        $dados['image'] = $imagedb;
      }

      if(request('video')){
          $dados['video'] = request('video');
      } else{
        $videodb = Recipe::where('id', $recipe->id)->first()->video;
        $dados['video'] = $videodb;
      }

      $dados['user_id'] = auth()->user()->id;

      Recipe::where('id', $recipe->id)->update([
        'title' => request('title'),
        'subtitle' => request('subtitle'),
        'body' => request('body'),
        'instructions' => request('instructions'),
        // 'category_id'=>request('category_id'),
        'image' => $dados['image'],
        'video' => $dados['video'],
        // 'user_id' => $dados['user_id']
      ]);

      Alert::success('Receita alterada com sucesso!', 'Sucesso')->persistent('Close');
      return redirect()->route('recipes');
    }

    public function deleteRecipe(Recipe $recipe) {
      $imageToRemove = Recipe::where('id', $recipe->id)->first()->image;
      unlink($imageToRemove);

      Recipe::find($recipe->id)->delete();
      return redirect()->route('recipes');
    }
}
