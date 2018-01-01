@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')
@include('layouts.header')

<main class="create-form company-custom">

    <div class="caixa">
        <form action="/admin/company/create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-grupo">
                <div class="subir">
                    <textarea
                            type="text"
                            name="description"
                            id="description"
                            required>
                        @if ($errors->any())
                            @if (Session::get('description-company'))
                                {{Session::get('description-company')}}
                            @endif
                        @endif
                    </textarea>
                    <label for="description">Página inicial do site</label>

                    @if ($errors->first('description'))
                        <div>
                            <span>{{$errors->first('description')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <textarea
                            type="text"
                            name="about"
                            id="about"
                            required>
                        @if ($errors->any())
                            @if (Session::get('about-company'))
                                {{Session::get('about-company')}}
                            @endif
                        @endif
                    </textarea>
                    <label for="about">Sobre a empresa</label>

                    @if ($errors->first('about'))
                        <div>
                            <span>{{$errors->first('about')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <input
                            type="text"
                            name="phone"
                            id="phone"
                            required
                        @if ($errors->any())
                            @if (Session::get('phone-company'))
                                value="{{Session::get('phone-company')}}"
                            @endif
                        @endif
                    >
                    <label for="phone">Telefone</label>

                    @if ($errors->first('phone'))
                        <div>
                            <span>{{$errors->first('phone')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <input
                            type="text"
                            name="facebook"
                            id="facebook"
                            required
                        @if ($errors->any())
                            @if (Session::get('facebook-company'))
                                value="{{Session::get('facebook-company')}}"
                            @endif
                        @endif
                    >
                    <label for="facebook">Facebook</label>

                    @if ($errors->first('facebook'))
                        <div>
                            <span>{{$errors->first('facebook')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <input
                            type="text"
                            name="email"
                            id="email"
                            required
                        @if ($errors->any())
                            @if (Session::get('email-company'))
                                value="{{Session::get('email-company')}}"
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
                            name="schedule"
                            id="schedule"
                            required
                        @if ($errors->any())
                            @if (Session::get('schedule-company'))
                                value="{{Session::get('schedule-company')}}"
                            @endif
                        @endif
                    >
                    <label for="email">Horário de Atendimento</label>

                    @if ($errors->first('schedule'))
                        <div>
                            <span>{{$errors->first('schedule')}}</span>
                        </div>
                    @endif
                </div>

                <div class="subir">
                    <input
                            type="text"
                            name="address"
                            id="address"
                            required
                        @if ($errors->any())
                            @if (Session::get('address-company'))
                                value="{{Session::get('address-company')}}"
                            @endif
                        @endif
                    >
                    <label for="address">Endereço</label>

                    @if ($errors->first('address'))
                        <div>
                            <span>{{$errors->first('address')}}</span>
                        </div>
                    @endif
                </div>

            </div>

            <button type="submit" name="button">Salvar</button>
        </form>
    </div>
</main>