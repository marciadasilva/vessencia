<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $admin = true;
      return view('admin.index', compact('admin'));
    }

    public function showCategories(){
      $categories = Category::latest()->get();

      $admin = true;
      return view('admin.category', compact(['admin', 'categories']));
    }

    public function createCategory(){
      $admin = true;
      return view('admin.create-category', compact('admin'));
    }

    public function storeCategory(){

      $this->validate(request(), [
          'name' => 'required',
          'image' => 'required',
          'description' => 'required',
      ]);

      $dados = request()->all();

      if(request()->hasFile('image')){
          $imagem = request()->file('image');
          $num = rand(1111, 9999);
          $dir = "img/categories/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "image_".$num.".".$ex;
          $imagem->move($dir, $nomeImagem);

          $dados['image'] = $dir . "/" . $nomeImagem;
      }

      $dados['user_id'] = auth()->user()->id;

      Category::create($dados);

      return redirect()->route('categories');
    }

    public function showMenu(){
      $admin = true;
      return view('admin.menu', compact('admin'));
    }

    public function deleteCategory(Category $category){
      Category::find($category->id)->delete();

      return redirect()->route('categories');
    }
}
