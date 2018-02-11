@extends('layouts.master')

@section('title', 'Contato - 5ª Essência')

@section('content')

@include('layouts.header')

<main class="create-form contact-custom">
  <div class="caixa">
    <form action="/contact" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1>Entre em contato conosco</h1>
        <div class="form-grupo">

            <div class="subir">
                <input
                        type="text"
                        name="name"
                        id="name"
                        required
                        @if ($errors->any())
                            @if (Session::get('name-contact'))
                                value="{{Session::get('name-contact')}}"
                            @endif
                        @endif
                >
                <label for="name">Nome</label>

                @if ($errors->first('name'))
                    <div>
                        <span>{{$errors->first('name')}}</span>
                    </div>
                @endif
            </div>

            <div class="subir">
                <input
                        type="email"
                        name="email"
                        id="email"
                        required
                        @if ($errors->any())
                            @if (Session::get('email-contact'))
                                value="{{Session::get('email-contact')}}"
                            @endif
                        @endif
                >
                <label for="email">Email</label>

                @if ($errors->first('email'))
                    <div>
                        <span>{{$errors->first('email')}}</span>
                    </div>
                @endif
            </div>

            <div class="subir">
                <input
                        type="text"
                        name="subject"
                        id="subject"
                        required
                        @if ($errors->any())
                            @if (Session::get('subject-contact'))
                                value="{{Session::get('subject-contact')}}"
                            @endif
                        @endif
                >
                <label for="subject">Assunto</label>

                @if ($errors->first('subject'))
                    <div>
                        <span>{{$errors->first('subject')}}</span>
                    </div>
                @endif
            </div>

            <div class="subir">
                <textarea
                        type="text"
                        name="message"
                        id="message"
                        required>
                    @if ($errors->any())
                        @if (Session::get('message-company'))
                            {{Session::get('message-company')}}
                        @endif
                    @endif
                </textarea>
                <label for="message">Mensagem</label>

                @if ($errors->first('message'))
                    <div>
                        <span>{{$errors->first('message')}}</span>
                    </div>
                @endif
            </div>

        </div>
        <button type="submit" name="button">Enviar</button>
    </form>

    <div class="contact-text">
      <h1>Formas de Contato</h1>
      <p>
          Prefere conversar conosco? Estamos à sua disposição, para entrar em contato você pode ligar ou
          mandar e-mail ou visitar a nossa loja para conhecer nossos serviços.
      </p>
      <hr>
      <p><span>Endereço:</span> Passo Fundo.</p>
      <p><span>Telefone:</span> (55) 9 9955-9990</p>
      <p><span>E-mail:</span> vessencia@outlook.com</p>
      <hr>
      <p><span>Horário de Atendimento: </span>
          De segunda a sábado: 08:00 – 18:00</p>
      <hr>

      <a href="https://www.facebook.com/vessencia/" target="_blank">
          <i class="fa fa-facebook-official" aria-hidden="true"></i>
      </a>
    </div>
  </div>
</main>
  {{--<section id="contact">--}}
    {{--<div id="contact-form">--}}
        {{--<form action="/contact" method="post">--}}
          {{--{{csrf_field()}}--}}
            {{--<div class="group-custom">--}}

                {{--<div>--}}
                    {{--<h1>Entre em contato conosco</h1>--}}
                {{--</div>--}}






                {{--<div class="btn-form">--}}
                    {{--<button type="submit">Enviar</button>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</form>--}}
    {{--</div>--}}

    {{--<div id="contact-text">--}}
        {{--<div>--}}
            {{--<h1>Formas de Contato</h1>--}}
        {{--</div>--}}
        {{--<p>--}}
            {{--Prefere conversar conosco? Estamos à sua disposição, para entrar em contato você pode ligar ou--}}
            {{--mandar e-mail ou visitar a nossa loja para conhecer nossos serviços.--}}
        {{--</p>--}}

        {{--<hr>--}}

        {{--<p><span>Endereço:</span> Passo Fundo.</p>--}}
        {{--<p><span>Telefone:</span> (55) 9 9955-9990</p>--}}
        {{--<p><span>E-mail:</span> vessencia@outlook.com</p>--}}

        {{--<hr>--}}

        {{--<p><span>Horário de Atendimento: </span>--}}
        {{--De segunda a sábado: 08:00 – 18:00</p>--}}

        {{--<hr>--}}

        {{--<a href="https://www.facebook.com/vessencia/" target="_blank">--}}
            {{--<i class="fa fa-facebook-official" aria-hidden="true"></i>--}}
        {{--</a>--}}
    {{--</div>--}}
  {{--</section>--}}


@endsection
