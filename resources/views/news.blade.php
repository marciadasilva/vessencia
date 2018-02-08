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
          <a href="/news/detail/{{$n->id}}">
            <figure>
              <img src="{{asset($n->image)}}" alt="example">
            </figure>
            <article>
              <h2 class="article-title">
                {!!$n->title!!}
              </h2>
              <h3 class="article-title">
                {!!$n->subtitle!!}
              </h3>
              <p class="article-content">
                <!-- Tira as tags html, mantendo a formatação, porém não é seguro. -->
                {!!$n->body!!}
                <!-- Tira as tags html mas, também tira a formatação do texto -->
                <!-- {{strip_tags($n->body)}} -->
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
