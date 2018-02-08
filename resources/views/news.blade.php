@extends('layouts.master')

@section('title', 'Notícias Recentes - 5ª Essência')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="/">Home /</a>
        <a href="#" class="active"> Notícias Recentes</a>
      </div>
    </section>

    <section class="news-section">
      @foreach ($news as $n)
        <div class="item-news">
          <a href="/news/{{$n->id}}">
            <figure>
              <img src="{{asset($n->image)}}" alt="example">
            </figure>
            <article>
              <h2 class="article-title">
                {{$n->title}} : {{$n->subtitle}}
              </h2>
              <p class="article-content">
                {{$n->body}}
              </p>
              <div class="data-info">
                Data de publicação: {{$n->created_at}}
              </div>
            </article>
          </a>
        </div>
      @endforeach
    </section>

@endsection
