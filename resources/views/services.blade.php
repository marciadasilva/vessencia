@extends('layouts.master')
@section('title', 'Serviços - 5ª Essência')

@section('content')
@include('layouts.header')

<section class="all-cards bread-crumbs">
    <header>

      @if(isset($service))
          {{$service->name}}
        @else
          <a href="/">Home</a> / <a class="active" href="/services">Serviços</a>
      @endif

    </header>
    @foreach($services as $service)
      <div class="card-service">
        <div class="description-service">
          <h1>{{$service->name}}</h1>
          <P>{{$service->description}}</P>
        </div>
        <div class="image-service">
            <a href="/services"><img src="{{asset($service->image)}}" alt=""></a>
        </div>
      </div>

    @endforeach
</section>
@endsection
