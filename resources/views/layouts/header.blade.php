@if(isset($index))
<header id="navbar">
  <h2><a href="">5ª Essência</a></h2>
  <nav>
    <li><a class="expand_middle" href="#hero">Home</a></li>
    <li><a class="expand_middle" href="/chef">Chef</a></li>
    <li><a class="expand_middle" href="#menus">Cardápios</a></li>
    <li><a class="expand_middle" href="#services">Serviços</a></li>
    <li><a class="expand_middle" href="#gallery">Galerias</a></li>
    <li><a class="expand_middle" href="#contact">Contato</a></li>
    <li><a class="expand_middle" href="#">EN</a></li>
  </nav>
</header>
@elseif(isset($admin))
<header id="navbar" style="background: rgba(56, 56, 56, 0.7);">
  <h2><a href="">5ª Essência</a></h2>
  <nav>
    <li><a class="expand_middle" href="/">Home</a></li>
    <li><a class="expand_middle" href="/admin/category">Categorias</a></li>
    <li><a class="expand_middle" href="/admin/menu">Cardápios</a></li>
    <li><a class="expand_middle" href="/admin/service">Serviços</a></li>
    <li><a class="expand_middle" href="/admin/company">Empresa</a></li>
    <li><a class="expand_middle" href="/admin/help">Ajuda</a></li>
    <li><a class="expand_middle" href="/logout">Sair</a></li>
  </nav>
</header>
@else
<header id="navbar" style="background: rgba(56, 56, 56, 0.7);">
  <h2><a href="">5ª Essência</a></h2>
  <nav>
    <li><a class="expand_middle" href="/">Home</a></li>
    <li><a class="expand_middle" href="/chef">Chef</a></li>
    <li><a class="expand_middle" href="/menus">Cardápios</a></li>
    <li><a class="expand_middle" href="/services">Serviços</a></li>
    <li><a class="expand_middle" href="/gallery">Galerias</a></li>
    <li><a class="expand_middle" href="/contact">Contato</a></li>
    <li><a class="expand_middle" href="">EN</a></li>
  </nav>
</header>
@endif
