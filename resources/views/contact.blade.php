@extends('layouts.master')
@section('title', '5ª Essência')

@section('content')
@include('layouts.header')

  <section id="contact">
    <div id="contact-form">
        <form action="/contact" method="post">
          {{csrf_field()}}
            <div class="group-custom">
                <div>
                    <h1>Entre em contato conosco</h1>
                </div>


                @if ($errors->any())
                    {{--{{ $errors->first('name') }}--}}
                    {{--{{ $errors->first('email') }}--}}
                    {{--{{ $errors->first('subject') }}--}}
                    {{--{{ $errors->first('message') }}--}}
                    <div>
                        <input
                           type="text"
                           name="name"
                           id="name"
                           @if($errors->first('name'))
                            value=" {{$errors->first('name')}}"
                           @else
                            value=" {{Session::get('name-contact')}}"
                           @endif
                        >
                    </div>

                    <div>
                        <input
                           type="email"
                           name="email"
                           id="email"
                           @if($errors->first('email'))
                           value=" {{$errors->first('email')}}"
                           @else
                           value=" {{Session::get('email-contact')}}"
                           @endif
                        >
                    </div>

                    <div>
                        <input
                           type="text"
                           name="subject"
                           id="subject"
                           @if($errors->first('subject'))
                            value=" {{$errors->first('subject')}}"
                           @else
                            value=" {{Session::get('subject-contact')}}"
                           @endif
                        >
                    </div>

                    <div>
                        <textarea
                                rows="6"
                                id="message"
                                name="message"
                                @if($errors->first('message'))
                                    placeholder="{{$errors->first('message')}}"
                                @else
                                    placeholder="{{Session::get('message-contact')}}"
                                @endif></textarea>
                    </div>
                @else
                    {{-- QUANDO NÃO TEM ERROS VEM PARA ESTA PARTE --}}
                    <div>
                        <input type="text" name="name" id="name" placeholder="Nome">
                    </div>

                    <div>
                        <input type="email" name="email" id="email" placeholder="E-mail">
                    </div>

                    <div>
                        <input type="text" name="subject" id="subject" placeholder="Assunto">
                    </div>

                    <div>
                        <textarea rows="6" id="message" name="message" placeholder="Sua mensagem"></textarea>
                    </div>
                @endif

                <div class="btn-form">
                    <button type="submit">Enviar</button>
                </div>
            </div>

        </form>
    </div>

    <div id="contact-text">
        <div>
            <h1>Formas de Contato</h1>
        </div>
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
  </section>


@endsection
