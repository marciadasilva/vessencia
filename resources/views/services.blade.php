@extends('layouts.master')
@section('title', 'Serviços - 5ª Essência')

@section('content')
@include('layouts.header')

<section id="services">
    <header> Serviços </header>
    @foreach($services as $service)
        <div>
            <a href="/services/{{$service->id}}">
                <div>
                    <img src="{{asset($service->image)}}" alt="{{$service->name}}">
                    <span>{{$service->name}}</span>
                </div>
            </a>
        </div>
    @endforeach
</section>
@endsection
