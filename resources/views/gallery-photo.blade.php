@extends('layouts.master')

@section('title', 'Galeria de Fotos - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="index.html">Home /</a>
    <a href="#" class="active"> Galeria de fotos</a>
  </div>
</section>

<div class="container" id="container">
  @foreach($photos as $photo)
    <div class="item">
      <img src="{{asset($photo->image)}}" class="example-image" alt="{{asset($photo->image)}}"/>
      <a
        href="{{asset($photo->image)}}"
        class="example-image-link"
        id="lightbox-img"
        data-lightbox="example-set"
        data-title="
        @if($photo->description)
          {{$photo->description}}
        @else
          {{$photo->title}}
        @endif">
        <i class="fa fa-camera"></i>
      </a>
    </div>
  @endforeach
</div>

@endsection
