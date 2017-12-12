<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{  
  public function create(){
      return view('register');
  }

  public function store(){
    // validate the form
    $this->validate(request(), [
        'name' => 'required',
        'email' => 'required|email',
        'password' => 'required|confirmed'
    ]);

    // create and save the user
    $user = User::create([
        'name' => request('name'),
        'email' => request('email'),
        'password' =>bcrypt(request('password'))

    ]);

    // sign them in
    auth()->login($user);

    // redirect to the home page
    return redirect()->route('admin');

  }

  public function login(){
    return view('login');
  }

  public function signIn(){
    if(!auth()->attempt(request(['email', 'password']))){
      return back()->withErrors([
        'message'=>'E-mail ou senha digitados incorretamente'
      ]);
    }
    return redirect()->route('admin');
  }

  public function destroy(){
    auth()->logout();
    return redirect()->route('home');
  }

}