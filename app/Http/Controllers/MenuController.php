<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use App\Category;
use Session;
use Alert;

class MenuController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function showMenu(){
    $menus = Menu::latest()->paginate(8);
    $admin = true;
    return view('admin.menu', compact(['admin', 'menus']));
  }

  public function createMenu(){
    $admin = true;
    $categories = Category::latest()->get();

    return view('admin.create-menu', compact(['admin', 'categories']));
  }

  public function storeMenu(){
    Session::put('name-menu', request('name'));
    Session::put('description-menu', request('description'));
    Session::put('category_id-menu', request('category_id'));

    $this->validate(request(), [
      'name' => 'required',
      'category_id' => 'required',
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
    Alert::success('Cardápio criado com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('menus');
  }

  public function updateMenu(Menu $menu){
    $admin = true;
    $categories = Category::latest()->get();

    return view('admin.edit-menu', compact(['admin', 'menu', 'categories']));
  }

  public function storeUpdateMenu(Menu $menu){
    Session::put('name-menu-edit', request('name'));
    Session::put('description-menu-edit', request('description'));
    Session::put('category_id-menu-edit', request('category_id'));

    $this->validate(request(), [
      'name' => 'required',
      'category_id' => 'required',
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

      $imageToRemove = Category::where('id', $menu->id)->first()->image;
      unlink($imageToRemove);
      $dados['image'] = $dir . "/" . $nomeImagem;
    }else{
      $imagedb = Menu::where('id', $menu->id)->first()->image;
      $dados['image'] = $imagedb;
    }

    $dados['user_id'] = auth()->user()->id;

    Menu::where('id', $menu->id)->update([
      'name' => request('name'),
      'description' => request('description'),
      'category_id'=>request('category_id'),
      'image' => $dados['image'],
      'user_id' => $dados['user_id']
    ]);

    Alert::success('Cardápio alterado com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('menus');
  }

  public function deleteMenu(Menu $menu){
    $imageToRemove = Menu::where('id', $menu->id)->first()->image;
    unlink($imageToRemove);
    Menu::find($menu->id)->delete();

    return redirect()->route('menus');
  }
}
