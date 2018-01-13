<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
use App\Service;
use App\Company;
use Mail;
use Session;
use Alert;

class SiteController extends Controller
{
  public function index(){
    $categories = Category::latest()->get();
    $services = Service::latest()->get();
    $companies = Company::take(1)->latest()->get();
    return view('index', compact(['categories', 'services', 'companies']));
  }

  public function menus(){
    $menus = Menu::latest()->paginate(8);
    return view('menus', compact('menus'));
  }

  public function menu(Category $category){
    $menus = Menu::where('category_id', '=', $category->id)->latest()->paginate(8);
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
    return view('detail-service', compact('service'));
  }
}
