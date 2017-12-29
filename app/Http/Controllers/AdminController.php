<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
use App\Service;
use Session;
use Illuminate\Support\Facades\DB;

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

    public function showCategoriesIgor(){
      $categories = Category::latest()->get();

      $admin = true;
      return view('admin.category-igor', compact(['admin', 'categories']));
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

      // $categoryType = DB::table('categories')
      //   ->leftjoin('menus', 'categories.id', '=', 'menus.category_id')
      //   ->select('categories.name')->get();

      return view('admin.menu', compact(['admin', 'menus']));
    }

    public function showMenuIgor(){
      $menus = Menu::latest()->get();
      $admin = true;

      // $categoryType = DB::table('categories')
      //   ->leftjoin('menus', 'categories.id', '=', 'menus.category_id')
      //   ->select('categories.name')->get();

      return view('admin.menu-igor', compact(['admin', 'menus']));
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

      return redirect()->route('menus');
    }

    public function deleteMenu(Menu $menu){
      Menu::find($menu->id)->delete();

      return redirect()->route('menus');
    }

    //Controllers Services

    public function showServices(){
        $services = Service::latest()->get();
        $admin = true;
        return view('admin.service', compact(['admin', 'services']));
    }

    public function createService(){
        $admin = true;
        $services = Service::latest()->get();

        return view('admin.create-service', compact(['admin', 'services']));
    }

    public function storeService(){

        Session::put('name-service', request('name'));
        Session::put('description-service', request('description'));

        $this->validate(request(), [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/services/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }

        $dados['user_id'] = auth()->user()->id;

        Service::create($dados);

        return redirect()->route('services');
    }

    public function updateService(Service $service){
        $admin = true;
        return view('admin.edit-service', compact(['admin', 'service']));
    }

    public function storeUpdateService(Service $service){

        Session::put('name-service-edit', request('name'));
        Session::put('description-service-edit', request('description'));

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/services/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }else{
            $imagedb = Service::where('id', $service->id)->first()->image;
            $dados['image'] = $imagedb;
        }

        $dados['user_id'] = auth()->user()->id;

        Service::where('id', $service->id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'image' => $dados['image'],
            'user_id' => $dados['user_id']
        ]);

        return redirect()->route('services');
    }

    public function deleteService(Service $service){
        Service::find($service->id)->delete();

        return redirect()->route('services');
    }


    public function help(){
        $admin = true;
        return view('admin.help', compact('admin'));
    }

    public function company(){
        $admin = true;
        return view('admin.company', compact('admin'));
    }
}
