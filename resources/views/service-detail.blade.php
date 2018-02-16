@extends('layouts.master')

@section('title', 'Serviços - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="bread-crumbs">
  <div class="bread-crumbs-links">
    <a href="/">Home /</a>
    <a href="/services">Serviços /</a>
    <a href="/services" class="active">{{$service->name}}</a>
  </div>
  <div class="search">
    <span><i class="fa fa-search fa-2x"></i></span>
  </div>
</section>

<section class="service-detail">
  <div>
    <img src="{{asset($service->image)}}" alt="{{$service->name}}">
  </div>
  <div class="service-detail-text">
    <h3 class="title">{{$service->name}}</h3>
    <hr>
    <p>{{$service->description}}</p>
    <p class="click-here">
      <span>Para contratar este serviço &nbsp</span>
      <a href="/contact">Entre em Contato.</a>
    </p >
  </div>

    <div class="related-news">
      <h3 class="title"> Notícias relacionadas</h3>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit, a!</p>

      <div class="related-news-items">
        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>

        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>

        <div class="related-news-item">
          <a href="news.html">
            <img src="{{asset($service->image)}}" alt="{{$service->name}}">
            <h4>Lorem ipsum dolor sit amet!</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          </a>
        </div>
      </div>
        <a href="#" class="anim">Mais</a>
      </div>
    </div>

    <div>
      <h1 style="text-align:left; margin-bottom: 1em;">Compartilhe</h1>

      <div>

        <iframe
          src="https://www.facebook.com/plugins/share_button.php?href=http%3A%2F%2F159.65.65.38%2Fservices%2F{{$service->id}}&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId"
          width="88"
          height="20"
          style="border:none;overflow:hidden;margin-bottom:1em;"
          scrolling="no"
          frameborder="0"
          allowTransparency="true">
        </iframe>

        <iframe
          src="https://platform.twitter.com/widgets/tweet_button.html?size=l&url=http%3A%2F%2F159.65.65.38/services/{{$service->id}}&via=vessencia&related=twitterapi%2Ctwitter&text=Serviço de {{$service->name}}&hashtags={{str_replace(" ","_","$service->name")}}%2Cvessencia"
          width="140"
          height="40"
          title="5ª Essência - {{$service->name}} "
          style="border: 0; overflow: hidden;">
        </iframe>
      </div>
    </div>
  </section>
@endsection
