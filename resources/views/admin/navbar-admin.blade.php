  <nav class="navbar">
    <span class="open-slide">
      <a href="#" onclick="openSlideMenu()">
        <svg width="30" height="30">
          <path d="M0,5 30,5" stroke="#383838"
          stroke-width="5"/>
          <path d="M0,14 30,14" stroke="#383838"
          stroke-width="5"/>
          <path d="M0,23 30,23" stroke="#383838"
          stroke-width="5"/>
        </svg>
      </a>
    </span>

    <ul class="navbar-nav">
      <li><a href="/">Home</a></li>
      <li><a href="/admin/category">Categorias</a></li>
      <li><a href="/admin/menu">Cardápios</a></li>
      <li><a href="/admin/services">Serviços</a></li>
      <li><a href="/admin/company">Empresa</a></li>
      <li><a href="/admin/help">Ajuda</a></li>
      <li><a href="/logout">Sair</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close"
    onclick="closeSlideMenu()">&times;</a>
    <a href="/">Home</a>
    <a href="/admin/category">Categorias</a>
    <a href="/admin/menu">Cardápios</a>
    <a href="/admin/services">Serviços</a>
    <a href="/admin/company">Empresa</a>
    <a href="/admin/help">Ajuda</a>
    <a href="/logout">Sair</a>
  </div>

  <script type="text/javascript">

  function openSlideMenu(){
    document.getElementById('side-menu').style.width = '250px';
    document.getElementById('main').style.marginLeft = '250px';
  }

  function closeSlideMenu(){
    document.getElementById('side-menu').style.width = '0';
    document.getElementById('main').style.marginLeft = '0';
  }

  </script>
