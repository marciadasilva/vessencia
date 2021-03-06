<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
use App\Service;
use App\Company;
use App\News;
use App\Recipe;
use Mail;
use Session;
use Alert;

class SiteController extends Controller
{
  public function index(){
    $menus = Menu::take(4)->get();
    $services = Service::take(4)->get();
    $companies = Company::take(1)->latest()->get();
    $news = News::take(3)->latest()->get();
    $index = true;
    return view('index', compact(['menus', 'services', 'companies', 'news', 'index']));
  }

  public function chef(){
    return view('chef');
  }

  public function categories(){
    $categories = Category::latest()->get();
    return view('categories', compact('categories'));
  }

  public function menus(){
    $categories = Category::latest()->get();
    $menus = Menu::latest()->get();
    return view('menus', compact(['menus', 'categories']));
  }

  public function menu(Category $category){
    $menus = Menu::where('category_id', '=', $category->id)->latest()->paginate(50);
    return view('menus', compact(['menus', 'category']));
  }

  public function detailMenu(Category $category, Menu $menu){
    return view('detail-menu', compact('menu'));
  }

  public function contact(){
    return view('contact');
  }

  public function store(){
    Session::put('name-contact', request('name'));
    Session::put('email-contact', request('email'));
    Session::put('subject-contact', request('subject'));
    Session::put('message-contact', request('message'));

    $this->validate(request(), [
      'name' => 'required',
      'email' => 'required|email',
      'subject' => 'min:3',
      'message' => 'min:5'
    ]);

    $data = array(
      'name' => request('name'),
      'email' => request('email'),
      'subject' => request('subject'),
      'bodyMessage' => request('message')
    );

    Mail::send('emails.contact', $data, function($message) use($data){
      $message->from($data['email']);
      $message->to('marcia.dasilva1410@gmail.com');
      $message->subject($data['subject']);
    });

    Alert::success('Sucesso! Logo estaremos lendo sua mensagem.', 'Sucesso')->persistent('Close');
    return redirect()->route('contact');
  }

  public function services(){
    $services = Service::latest()->get();
    return view('services', compact('services'));
  }

  public function service(Service $service){
    return view('service-detail', compact('service'));
  }

  public function galleryPhotos(){
    $photosm = Menu::latest()->get(['image','description']);
    $photost = Category::latest()->get(['image','description']);
    $photoss = Service::latest()->get(['image', 'description']);
    $photosn = News::latest()->get(['image', 'title']);
    $photosr = Recipe::latest()->get(['image', 'title']);
    $photos = $photosm->toBase()->merge($photost)->merge($photoss)->merge($photosn)->merge($photosr);
    $photos = $photos->shuffle();
    return view('gallery-photo', compact('photos'));
  }

  public function galleryRecipes(){
    $recipes = Recipe::latest()->get();
    return view('gallery-recipes', compact('recipes'));
  }

  public function galleryRecipeDetail(Recipe $recipe) {
    return view('gallery-recipes-detail', compact('recipe'));
  }

  public function news(){
    $news = News::latest()->paginate(8);
    return view('news', compact('news'));
  }

  public function newsDetail(News $news) {
    return view('news-detail', compact('news'));
  }
}
