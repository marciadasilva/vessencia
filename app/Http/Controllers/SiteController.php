<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Menu;
use Mail;
use Session;

class SiteController extends Controller
{
  public function index(){
    $categories = Category::latest()->get();
    return view('index', compact('categories'));
  }

  public function menus(){
    $menus = Menu::latest()->paginate(2);
    return view('menus', compact('menus'));
  }

  public function menu(Category $category){
    $menus = Menu::where('category_id', '=', $category->id)->latest()->paginate(2);
    return view('menus', compact(['menus', 'category']));
  }

  public function contact(){
    return view('contact');
  }

  public function store(){

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

    Session::flash('success', 'Sua mensagem foi enviada com sucesso! Em breve estaremos lendo seu comentário.');


    return redirect()->route('contact');
  }

}
