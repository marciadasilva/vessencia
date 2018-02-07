@extends('layouts.master')

@section('title', 'Notícias - 5ª Essência')

@include('layouts.header')

<main class="all-cards">
  <button type="button" name="button"
          onclick="window.location.href='/admin/news/create'">
            Nova Notícia
  </button>
</main>

<div class="show-card">
  @foreach($news as $new)
  <div class="card-items">
    <img class="card_img" src="{{asset($new->image)}}" alt="{{$new->name}}">
    <div class="card_description">
      <h2>{{$new->title}}</h2>
      <p>{{$new->subtitle}}</p>
      <p>{{$new->body}}</p>
      <p>{{isset($new->video)}}</p>
    </div>

    <div class="card_buttons">
      <!-- <a href="/admin/news/edit/{{$news->id}}">
        <i class="fa fa-pencil"></i>
      </a> -->

      <!-- <a onclick="deleteItem({{$news>id}})">
        <i class="fa fa-trash-o"></i>
      </a> -->
    </div>
  </div>
  @endforeach
</div>
