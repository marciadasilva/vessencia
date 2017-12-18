@extends('layouts.master')

@section('title', 'Ajuda - 5ª Essência')

@include('layouts.header')

<main id="admin-page">
    <div class="panel">
        <h2>Olá {{Auth::user()->name}}, para Ajuda, entre em contato: </h2>
        <p>Whatsapp: (55) 99162-3997 </p>
        <p>Email: marcia.dasilva1410@gmail.com</p>
    </div>
</main>
