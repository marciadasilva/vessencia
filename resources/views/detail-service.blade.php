@extends('layouts.master')
@section('title', 'Serviços - 5ª Essência')

@section('content')
    @include('layouts.header')

    <section id="detail-service">
        <header> {{$service->name}} </header>
        <div>
            <label for="name">Nome do Serviço: {{$service->name}}</label>
        </div>
        <div>
            <label for="description">Descrição do Serviço: {{$service->description}}</label>
        </div>
        <div>
            <img src="{{asset($service->image)}}">
        </div>
    </section>
@endsection
