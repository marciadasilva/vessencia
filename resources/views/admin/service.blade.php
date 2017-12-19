@extends('layouts.master')

@section('title', 'Serviços - 5ª Essência')

@include('layouts.header')

<main class="admin-table">

  <section>
    <button type="button" name="button"><a href="/admin/service/create">Novo Serviço</a></button>
    <table align="center">
      <thead>
      <tr>
        <th>Título</th>
        <th><i class="fa fa-camera" aria-hidden="true"></i></th>
        <th><i class="fa fa-cogs" aria-hidden="true"></i></th>
      </tr>
      </thead>

      <tbody>
      @foreach($services as $service)
        <tr>
          <td style="width:25%;">{{$service->name}}</td>
          <td style="width:50%;"><img  src="{{asset($service->image)}}" alt="{{$service->name}}"/></td>
          <td style="width:25%;">
            <a href="/admin/service/edit/{{$service->id}}">
              <i class="fa fa-pencil"></i>
            </a>
            <a onclick="return confirm('Você tem certeza que quer deletar este serviço?');"
               href="/admin/service/delete/{{$service->id}}">
              <i class="fa fa-trash-o"></i>
            </a>
          </td>
        </tr>
      @endforeach

      </tbody>
    </table>

  </section>
</main>