@extends('layouts.master')

@section('title', 'Chef - 5ª Essência')

@section('content')

@include('layouts.header')

<section class="hero-chef">
  <div class="photo-introduction">
    <img src="{{asset('img/chef.png')}}" alt="Chef">
  </div>
  <div class="hero-chef-content">
		<span class="content-chef">Chef</span>
    <span class="name-chef">André Pinheiro Machado</span>
	</div>
</section>

<section>
  <div class="introduction">
    <h3 class="title">Apresentação</h3>
    <hr>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde illo optio repudiandae quia, temporibus similique ab, dignissimos iste minima deleniti magni. Laudantium, necessitatibus pariatur porro dolorum aliquid debitis aliquam doloremque sint illo, quis officia! Omnis quasi tenetur, rerum placeat architecto voluptatibus doloribus illo aliquam quidem debitis? At sunt fugit aliquid, eum magnam, suscipit voluptate quas deserunt dolorum, unde, alias nemo accusamus quia! Illum nesciunt porro excepturi accusamus recusandae quisquam possimus dolore, qui molestias accusantium in odio similique, sit repellendus quasi quibusdam libero officia consectetur provident! Quod ipsa voluptatem, enim nisi rem dicta ad! Fuga eveniet vero, ipsum eius voluptas neque.</p>
  </div>
</section>

<section class="tree">
  <h3 class="title">Evolução</h3>
  <hr>
  <img src="{{asset('img/tree.png')}}" alt="tree">
</section>

<section class="other-projects">
  <p>Outros projetos</p>
</section>



@endsection
