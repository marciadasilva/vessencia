@extends('layouts.master')
@section('title', '5ª Essência - Menus')

@section('content')
@include('layouts.header')

<section id="services">
    <header> Teste </header>
    <div>
        <a href=""><div><img src="{{asset('img/restaurante.jpg')}}" alt=""><span>Serviço 1</span></div></a>
    </div>
    <div>
        <a href=""><div><img src="{{asset('img/buffet.jpg')}}" alt=""><span>Serviço 2</span></div></a>
    </div>
    <div>
        <a href=""><div><img src="{{asset('img/consultoria.jpg')}}" alt=""><span>Serviço 3</span></div></a>
    </div>

</section>
@endsection
