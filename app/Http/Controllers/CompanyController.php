<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;

class CompanyController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function company(){
    $admin = true;
    $companies = Company::take(1)->latest()->get();
    return view('admin.company', compact(['admin', 'companies']));
  }

  public function storeCompany(){
    $this->validate(request(), [
      'about' => 'required',
      'facebook' => 'required',
      'phone' => 'required',
      'email' => 'required',
      'address' => 'required',
      'description' => 'required',
    ]);

    $dados = request()->all();

    Company::create($dados);
    return redirect()->route('company');
  }
}
