@extends('layouts.master')
@section('title', 'Serviços - 5ª Essência')

@section('content')
@include('layouts.header')

<section class="all-cards bread-crumbs">

    <header>
        <a href="/">Home</a> /
        <a href="/services">Serviços</a> /
        <a class="active">{{$service->name}}</a>
    </header>

    <div class="detail-service">
        <div class="description-service">
            <h1>{{$service->name}}</h1>
            <P>{{$service->description}}</P>
        </div>
        <div class="image-service">
            <a href="/services/{{$service->id}}">
                <img src="{{asset($service->image)}}" alt="{{$service->name}}" class="img-responsive">
            </a>
        </div>
    </div>
</section>
@endsection
