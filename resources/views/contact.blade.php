@extends('layouts.master')
@section('title', 'Contato - 5ª Essência')

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

                <div>
                    <input type="text"
                           name="name"
                           id="name"
                           placeholder="Nome"
                           required
                            @if ($errors->any())
                                @if (Session::get('name-contact'))
                                    value="{{Session::get('name-contact')}}"
                                @endif
                            @endif
                    >
                </div>

                @if ($errors->any())
                    <div>
                        @if($errors->first('name'))
                            <span>{{$errors->first('name')}}</span>
                        @endif
                    </div>
                @endif

                <div>
                    <input type="email"
                           name="email"
                           id="email"
                           placeholder="E-mail"
                           required
                            @if ($errors->any())
                                @if (Session::get('email-contact'))
                                    value="{{Session::get('email-contact')}}"
                                @endif
                            @endif
                    >
                </div>

                @if ($errors->any())
                    <div>
                        @if($errors->first('email'))
                            <span>{{$errors->first('email')}}</span>
                        @endif
                    </div>
                @endif

                <div>
                    <input type="text"
                           name="subject"
                           id="subject"
                           placeholder="Assunto"
                           required
                            @if ($errors->any())
                                @if (Session::get('subject-contact'))
                                    value="{{Session::get('subject-contact')}}"
                                @endif
                            @endif
                    >
                </div>

                @if ($errors->any())
                    <div>
                        @if($errors->first('subject'))
                            <span>{{$errors->first('subject')}}</span>
                        @endif
                    </div>
                @endif

                <div>
                    <textarea rows="6"
                              id="message"
                              name="message"
                              placeholder="Sua mensagem">

                            @if ($errors->any())
                                @if (Session::get('message-contact'))
                                    {{Session::get('message-contact')}}
                                @endif
                            @endif
                    </textarea>
                </div>

                @if ($errors->any())
                    <div>
                        @if($errors->first('message'))
                            <span>{{$errors->first('message')}}</span>
                        @endif
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
