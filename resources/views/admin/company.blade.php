@extends('layouts.master')

@section('title', 'Informações da Empresa - 5ª Essência')
@include('layouts.header')

<main class="create-form company-custom">
  <div class="caixa">
    <form action="/admin/company" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
      <div class="form-grupo">
        <div class="subir">
          <textarea type="text" name="description" id="description" rows="8" required>
            @foreach($companies as $company)
              @if(isset($company->description))
                {{$company->description}}
              @endif
            @endforeach
          </textarea>

          <label for="description">Página inicial do site</label>

          @if ($errors->first('description'))
            <div>
              <span>{{$errors->first('description')}}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <textarea type="text" name="about" id="about" rows="8" required>
            @foreach($companies as $company)
              @if(isset($company->about))
                {{$company->about}}
              @endif
            @endforeach
          </textarea>
          <label for="about">Sobre a empresa</label>

          @if ($errors->first('about'))
            <div>
              <span>{{$errors->first('about')}}</span>
            </div>
          @endif
        </div>

        <div class="subir">
          <input type="text" name="phone" id="phone" required
          @foreach($companies as $company)
            @if(isset($company->phone))
              value="{{$company->phone}}"
            @endif
          @endforeach
          >
          <label for="phone">Telefone</label>

          @if ($errors->first('phone'))
              <div>
                  <span>{{$errors->first('phone')}}</span>
              </div>
          @endif
        </div>

        <div class="subir">
          <input type="text" name="facebook" id="facebook" required
            @foreach($companies as $company)
             @if(isset($company->facebook))
               value="{{$company->facebook}}"
             @endif
            @endforeach
          >
          <label for="facebook">Facebook</label>

          @if ($errors->first('facebook'))
              <div>
                  <span>{{$errors->first('facebook')}}</span>
              </div>
          @endif
        </div>

        <div class="subir">
          <input type="text" name="twitter" id="twitter"
            @foreach($companies as $company)
             @if(isset($company->twitter))
               value="{{$company->twitter}}"
             @endif
            @endforeach
          >
          <label for="facebook">Twitter</label>
        </div>

        <div class="subir">
          <input type="text" name="instagram" id="instagram"
            @foreach($companies as $company)
             @if(isset($company->instagram))
               value="{{$company->instagram}}"
             @endif
            @endforeach
          >
          <label for="facebook">Instagram</label>
        </div>

        <div class="subir">
            <input type="text" name="email" id="email" required
              @foreach($companies as $company)
               @if(isset($company->email))
                 value="{{$company->email}}"
               @endif
             @endforeach
            >
            <label for="email">Email</label>

            @if ($errors->first('email'))
              <div>
                <span>{{$errors->first('email')}}</span>
              </div>
            @endif
        </div>

        <div class="subir">
            <input type="text" name="address" id="address" required
              @foreach($companies as $company)
                @if(isset($company->address))
                  value="{{$company->address}}"
                @endif
              @endforeach
            >
            <label for="email">Horário de Atendimento</label>

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
