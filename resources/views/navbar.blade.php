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
      <li><a href="#">Sobre</a></li>
      <li><a href="#">Serviços</a></li>
      <li><a href="/contact">Contato</a></li>
    </ul>
  </nav>

  <div id="side-menu" class="side-nav">
    <a href="#" class="btn-close"
    onclick="closeSlideMenu()">&times;</a>
    <a href="/">Home</a>
    <a href="#">Sobre</a>
    <a href="#">Serviços</a>
    <a href="/contact">Contato</a>
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
