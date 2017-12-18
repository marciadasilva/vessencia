@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')

@include('layouts.header')

<main class="admin-create">

    <section class="card-create">
        <form action="/admin/company/create" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <div>
                    <label for="about">Sobre a Empresa</label> <br>
                    <textarea rows="6" id="about" name="about" placeholder=""></textarea>
                </div>

                <div>
                    <label for="phone">Whatsapp</label>
                    <input type="text" name="phone" id="phone" required>
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div>
                    <label for="facebook">Facebook</label>
                    <input type="text" name="facebook" id="facebook" required>
                </div>

                <div>
                    <label for="hour">Horário de Atendimento</label>
                    <input type="text" name="hour" id="hour" required>
                </div>

                <div>
                    <label for="description">Descrição da Empresa</label> <br>
                    <textarea rows="6" id="description" name="description" placeholder=""></textarea>
                </div>

                <div class="">
                    <button type="submit" name="button">Salvar</button>
                </div>


            </div>
        </form>


    </section>


</main>
