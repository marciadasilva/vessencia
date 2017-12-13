<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;

class AdminController extends Controller
{
    public function __construct(){
      $this->middleware('auth');
    }

    public function index(){
      $admin = true;
      return view('admin.index', compact('admin'));
    }

    //Controllers Categories
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

    public function updateCategory(Category $category){
      $admin = true;

      return view('admin.edit-category', compact(['admin', 'category']));
    }

    public function storeUpdateCategory(Category $category){

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

      return redirect()->route('categories');
    }

    public function deleteCategory(Category $category){
      Category::find($category->id)->delete();

      return redirect()->route('categories');
    }

    //Controllers Menu
    public function showMenu(){
      $menus = Menu::latest()->get();

      $admin = true;
      return view('admin.menu', compact(['admin', 'menus']));
    }

    public function createMenu(){
      $admin = true;
      return view('admin.create-menu', compact('admin'));
    }

    public function storeMenu(){

      $this->validate(request(), [
          'name' => 'required',
          'image' => 'required',
          'description' => 'required',
      ]);

      $dados = request()->all();

      if(request()->hasFile('image')){
          $imagem = request()->file('image');
          $num = rand(1111, 9999);
          $dir = "img/menus/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "image_".$num.".".$ex;
          $imagem->move($dir, $nomeImagem);

          $dados['image'] = $dir . "/" . $nomeImagem;
      }

      $dados['user_id'] = auth()->user()->id;

      Menu::create($dados);

      return redirect()->route('menus');
    }

    public function updateMenu(Menu $menu){
      $admin = true;

      return view('admin.edit-menu', compact(['admin', 'menu']));
    }

    public function storeUpdateMenu(Menu $menu){

      $this->validate(request(), [
          'name' => 'required',
          'description' => 'required'
      ]);

      $dados = request()->all();

      if(request()->hasFile('image')){
          $imagem = request()->file('image');
          $num = rand(1111, 9999);
          $dir = "img/menus/";
          $ex = $imagem->guessClientExtension();
          $nomeImagem = "image_".$num.".".$ex;
          $imagem->move($dir, $nomeImagem);

          $dados['image'] = $dir . "/" . $nomeImagem;
      }else{
        $imagedb = Menu::where('id', $menu->id)->first()->image;
        $dados['image'] = $imagedb;
      }

      $dados['user_id'] = auth()->user()->id;

      Menu::where('id', $menu->id)->update([
        'name' => request('name'),
        'description' => request('description'),
        'image' => $dados['image'],
        'user_id' => $dados['user_id']
      ]);

      return redirect()->route('menus');
    }

    public function deleteMenu(Menu $menu){
      Menu::find($menu->id)->delete();

      return redirect()->route('menus');
    }


}
