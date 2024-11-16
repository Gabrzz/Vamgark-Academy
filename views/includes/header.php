<link rel="stylesheet" href="../style/header.css">

<header>
  <div class="topo pure-g">
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-left">
        <a href="../Faq"><img src="../../img/Faq.png" alt="Ícone FAQ"></a>
        <a href="www.instagram.com/vamgarkacademy" class="icon-link"><i class="fab fa-instagram"></i></a> 
        <a href="#" class="icon-link"><i class="fab fa-facebook"></i></a>
        <a href="#" class="icon-link"><i class="fab fa-twitter"></i></a>
      </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-center">
        <a href="../Home/"><img class="logo-vamgark" src="../../img/logo-vamgark-whitesimple.png" alt="Logo Vamgark"></a>
      </div>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <div class="header-right">
        <div class="search">
          <input type="text" placeholder="Pesquisar">
          <i class="fas fa-search"></i>
        </div>
        <div class="minhaconta">
          <a href="../MinhaConta" class="button">Minha Conta</a>
        </div>
      </div>
    </div>
  </div>
  <div class="menu">
    <ul class="nav-menu pure-g">
      <li class="pure-u-1-6"><a href="../Home">Página Inicial</a></li>
      <li class="pure-u-1-6"><a href="../Sobre">Sobre o Curso</a></li>
      <li class="pure-u-1-6"><a href="../Eventos">Eventos</a></li>
      <li class="pure-u-1-6"><a href="../Forum">Fórum</a></li>
      <li class="pure-u-1-6"><a href="../Mercado">Mercado</a></li>
      <li class="pure-u-1-6"><a href="../Casa">Sua Casa</a></li>
    </ul>
  </div>
  <div class="page-indicator">
    <span>Você está aqui</span>
  </div>

  <style>
    .page-indicator{
        transform: translateX(calc(174% * (<?php echo $pagina_atual - 1; ?>)));
    }
  </style>
</header>