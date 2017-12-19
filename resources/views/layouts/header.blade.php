<header class="header-menus">
  <a href="/"><img class="img-header" src="{{asset('img/logo.png')}}" alt="logo"></a>

  <div class="navbar">
    @if(isset($admin))
      @include('admin.navbar-admin')
    @else
      @include('navbar')
    @endif
  </div>
</header>
