@extends('layouts.master')

@section('title', 'Administração - 5ª Essência')

@section('content')

@include('layouts.header')

<section id="admin-page">
  <div class="panel">
    <h1>Olá {{Auth::user()->name}} </h1>
    <h2>Bem vindo a área administrativa!</h2>
  </div>
</section>

@endsection
