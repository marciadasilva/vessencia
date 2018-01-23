@extends('layouts.master')

@section('title', 'Galeria de Fotos')

@section('content')

@include('layouts.header')

    <section class="bread-crumbs">
      <div class="bread-crumbs-links">
        <a href="index.html">Home /</a>
        <a href="#" class="active"> Galeria de fotos</a>
      </div>
    </section>

    <div class="container" id="container">
      <div class="item">
        <img src="" class="example-image"/>
        <a
          href="assets/img/dish-chef1.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="{{ asset('img/dish-chef2.JPG')}}" class="example-image"/>
        <a
          href="{{ asset('img/dish-chef2.JPG')}}"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/dish-chef3.jpeg"/>
        <a
          href="assets/img/dish-chef3.jpeg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/dish-chef4.jpg"/>
        <a
          href="assets/img/dish-chef4.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/dish-chef5.jpg"/>
        <a
          href="assets/img/dish-chef5.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/dish-chef6.jpg"/>
        <a
          href="assets/img/dish-chef6.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/dish-chef7.jpg"/>
        <a
          href="assets/img/dish-chef7.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/canape.jpg"/>
        <a
          href="assets/img/canape.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/bread.jpg"/>
        <a
          href="assets/img/bread.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/buffet.jpg"/>
        <a
          href="assets/img/buffet.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/carne-com-massa.jpg"/>
        <a
          href="assets/img/carne-com-massa.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
      <div class="item">
        <img src="assets/img/food.jpg"/>
        <a
          href="assets/img/food.jpg"
          class="example-image-link"
          id="lightbox-img"
          data-lightbox="example-set"
          data-title="Lorem ipsum dolor sit amet, consectetur adipisicing.">
          <i class="fa fa-camera"></i>
        </a>
      </div>
    </div>

    @endsection
