<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
use Session;
use Alert;

class CategoryController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function showCategories(){
    $categories = Category::latest()->paginate(8);
    $admin = true;
    return view('admin.category', compact(['admin', 'categories']));
  }

  public function createCategory(){
    $admin = true;
    return view('admin.create-category', compact('admin'));
  }

  public function storeCategory(){
    Session::put('name-category', request('name'));
    Session::put('description-category', request('description'));

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
    Alert::success('Categoria criada com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('categories');
  }

  public function updateCategory(Category $category){
    $admin = true;
    return view('admin.edit-category', compact(['admin', 'category']));
  }

  public function storeUpdateCategory(Category $category){
    Session::put('name-category-edit', request('name'));
    Session::put('description-category-edit', request('description'));

    $this->validate(request(), [
      'name' => 'required',
      'description' => 'required'
    ]);

    $dados = request()->all();

    if(request()->hasFile('image')){
      $imagem = request()->file('image');
      $num = rand(1111, 9999);
      $dir = "img/categories/";
      $ex = $imagem->guessClientExtension();
      $nomeImagem = "image_".$num.".".$ex;
      $imagem->move($dir, $nomeImagem);

      $imageToRemove = Category::where('id', $category->id)->first()->image;
      unlink($imageToRemove);
      $dados['image'] = $dir . "/" . $nomeImagem;
    }else{
      $imagedb = Category::where('id', $category->id)->first()->image;
      $dados['image'] = $imagedb;
    }

    $dados['user_id'] = auth()->user()->id;

    Category::where('id', $category->id)->update([
      'name' => request('name'),
      'description' => request('description'),
      'image' => $dados['image'],
      'user_id' => $dados['user_id']
    ]);

    Alert::success('Categoria alterada com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('categories');
  }

  public function deleteCategory(Category $category){
    if(Menu::where('category_id', $category->id)->first()){
      return redirect()->back()->withErrors(['Não é possível deletar
      uma categoria que possui cardápios cadastrados.', '']);
    }else{
      $imageToRemove = Category::where('id', $category->id)->first()->image;
      unlink($imageToRemove);
      Category::find($category->id)->delete();
      return redirect()->route('categories');
    }
  }
}
