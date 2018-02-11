@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@section('content')

@include('layouts.header')

    <section class="all-cards bread-crumbs">

        <header>
          <div>
            <a href="/">Home</a> /
            <a href="/menus">Cardápios</a> /
            <a href="/menus/{{$menu->category->id}}">{{$menu->category->name}}</a> /
            <a class="active">{{$menu->name}}</a>
          </div>
        </header>

        <div class="detail-service">
            <div class="description-service">
                <h1>{{$menu->name}}</h1>
                <P>{{$menu->description}}</P>
            </div>
            <div class="image-service">
                <img src="{{asset($menu->image)}}" alt="{{$menu->name}}" class="img-responsive">
            </div>
        </div>
    </section>
@endsection
