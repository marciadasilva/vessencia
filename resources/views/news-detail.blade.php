@extends('layouts.master')

@section('title', 'Notícias Recentes - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/news">Notícias /</a>
    <a href="#" class="active"> Título da Notícia</a>
  </div>
</section>

<section class="news-detail">
  <div class="title-news">
    <h3 class="title">{{$news->title}}</h3>
    <hr>
  </div>
  <div class="date-time">
    <p>{{$news->created_at}}</p>
  </div>
  <div class="news-content">
    <img src="{{asset($news->image)}}" alt="News 1">
    <p>{!!$news->body!!}</p>
  </div>
</section>



@endsection
