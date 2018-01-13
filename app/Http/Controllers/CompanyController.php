<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Alert;

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
    Alert::success('Dados da empresa salvos com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('company');
  }
}
