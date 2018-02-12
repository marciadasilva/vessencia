<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use Session;
use Alert;
use Purifier;

class NewsController extends Controller
{
    public function __construct() {
      $this->middleware('auth');
    }

    public function showNews(){
      $news = News::latest()->paginate(8);
      $admin = true;
      return view('admin.news', compact(['admin', 'news']));
    }

    public function createNews(){
      $admin = true;

      return view('admin.create-news', compact(['admin']));
    }

    public function storeNews(){
      Session::put('title-news', request('title'));
      Session::put('subtitle-news', request('subtitle'));
      Session::put('body-news', request('body'));

      $this->validate(request(), [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required',
        'image' => 'required',
      ]);

      // purifier this variable
      // $dados = Purifier::clean(request()->all());

      $dados['title'] = request('title');
      $dados['subtitle'] = request('subtitle');
      $dados['body'] = Purifier::clean(request('body'));

      if(request()->hasFile('image')){
        $imagem = request()->file('image');
        $num = rand(1111, 9999);
        $dir = "img/news/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir, $nomeImagem);

        $dados['image'] = $dir . "/" . $nomeImagem;
      }

      News::create($dados);
      Alert::success('A notícia foi cadastrada com sucesso!', 'Sucesso')->persistent('Close');
      return redirect()->route('news');
    }

    public function updateNews(News $news){
      $admin = true;

      return view('admin.edit-news', compact(['admin', 'news']));
    }

    public function storeUpdateNews(News $news){
      Session::put('title-news-edit', request('title'));
      Session::put('subtitle-news-edit', request('subtitle'));
      Session::put('body-news-edit', request('body'));

      $this->validate(request(), [
        'title' => 'required',
        'subtitle' => 'required',
        'body' => 'required',
      ]);

      $dados = Purifier::clean(request()->all());

      if(request()->hasFile('image')){
        $imagem = request()->file('image');
        $num = rand(1111, 9999);
        $dir = "img/news/";
        $ex = $imagem->guessClientExtension();
        $nomeImagem = "image_".$num.".".$ex;
        $imagem->move($dir, $nomeImagem);

        $imageToRemove = News::where('id', $news->id)->first()->image;
        unlink($imageToRemove);
        $dados['image'] = $dir . "/" . $nomeImagem;
      }else{
        $imagedb = News::where('id', $news->id)->first()->image;
        $dados['image'] = $imagedb;
      }

      $dados['user_id'] = auth()->user()->id;

      News::where('id', $news->id)->update([
        'title' => request('title'),
        'subtitle' => request('subtitle'),
        'body' => request('body'),
        // 'category_id'=>request('category_id'),
        'image' => $dados['image'],
        // 'user_id' => $dados['user_id']
      ]);

      Alert::success('Notícia alterada com sucesso!', 'Sucesso')->persistent('Close');
      return redirect()->route('news');
    }

    public function deleteNews(News $news) {
      $imageToRemove = News::where('id', $news->id)->first()->image;
      unlink($imageToRemove);

      News::find($news->id)->delete();
      return redirect()->route('news');
    }

}
