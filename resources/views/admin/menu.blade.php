@extends('layouts.master')

@section('title', 'Cardápios - 5ª Essência')

@include('layouts.header')

<main id="admin-menu">

  <section>
    <button type="button" name="button"><a href="/admin/menu/create">Novo Cardápio</a></button>

    <thead>
      <tr>
        <th>Título</th>
        <th>Imagem</th>
        <th><i class="fa fa-pencil"></i></th>
        <th><i class="fa fa-trash-o"></i></th>
      </tr>
    </thead>

    <tbody>
      @foreach($menus as $menu)
      <tr>
        <td style="width:20%;">{{$menu->name}}</td>
        <td style="width:50%;"><img  src="{{asset($menu->image)}}" alt="{{$menu->name}}"/></td>
        <td style="width:15%;">
            <a href="/admin/menu/edit/{{$menu->id}}">
              <i class="fa fa-pencil"></i>
            </a>
        </td>
        <td style="width:15%;">
            <a onclick="return confirm('Você tem certeza que quer deletar este cardápio?');"
               href="/admin/menu/delete/{{$menu->id}}">
              <i class="fa fa-trash-o"></i>
            </a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>

    <!-- <ul>
      <li>
            <div class="cards">
              <img src="{{asset('img/shrimp.jpg')}}" alt="card">
              <div class="cards-content">
                <h3 class="cards-title">Cardápio 1</h3>
                <hr>
                <button type="button" name="btnEditar">Editar</button>
                <button type="button" name="btnDeletar">Deletar</button>
              </div>
            </div>
      </li>
    </ul> -->
  </section>
</main>
