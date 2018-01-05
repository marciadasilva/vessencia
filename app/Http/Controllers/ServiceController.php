<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use Session;
use Alert;

class ServiceController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function showServices(){
    $services = Service::latest()->paginate(3);
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
    Alert::success('Serviço criado com sucesso!', 'Sucesso')->persistent('Close');
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

    $imageToRemove = Service::where('id', $service->id)->first()->image;
    unlink($imageToRemove);

    $dados['user_id'] = auth()->user()->id;

    Service::where('id', $service->id)->update([
      'name' => request('name'),
      'description' => request('description'),
      'image' => $dados['image'],
      'user_id' => $dados['user_id']
    ]);

    Alert::success('Serviço alterado com sucesso!', 'Sucesso')->persistent('Close');
    return redirect()->route('services');
  }

  public function deleteService(Service $service){
    $imageToRemove = Service::where('id', $service->id)->first()->image;
    unlink($imageToRemove);
    Service::find($service->id)->delete();
    return redirect()->route('services');
  }
}
