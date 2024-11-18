<?php include '../../database/conexao.php' ?>
<?php include '../../database/usuario.php' ?>
<?php include '../../database/verifica_login.php' ?>
<?php include '../../database/funcoes_votos.php'; ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <?php include '../includes/head.php' ?>
  <link rel="stylesheet" href="style.css">
  <title>Página Inicial</title>
</head>
<body>
  <?php 
    $pagina_atual = 1; 
    include '../includes/header.php';
  ?>

  <main>
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/christmas.png" alt="Festividades de Natal">
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Festividades de Natal!</h1>
            <p>🎄✨ O Grande Salão está todo decorado! Junte-se a nós na Vamgark para celebrar o Natal com magia, música e deliciosas iguarias. Venha criar memórias inesquecíveis em uma noite repleta de encantos e surpresas! 🧙‍♂️🎁</p>
          </div>
        </div>

        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/potion.png" alt="Poções Mágicas"> 
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Poções Mágicas</h1>
            <p>⚗️ Aprenda a preparar poções incríveis como a Felix Felicis e o Elixir da Vida! Domine a arte da poção com nossos mestres e descubra os segredos por trás de cada ingrediente. 🧪✨</p>
          </div>
        </div>

        <div class="swiper-slide pure-g">
          <div class="metade-1 pure-u-1 pure-u-md-1-3">
            <img class="simbolo-swiper" src="../../img/quadribol.png" alt="Quadribol"> 
          </div>
          <div class="metade-2 pure-u-1 pure-u-md-2-3">
            <h1>Quadribol</h1>
            <p> 🧹💨 Voe alto com a Vamgark! Junte-se ao nosso time de Quadribol e vivencie a emoção do esporte bruxo mais famoso. Treine suas habilidades, marque gols e conquiste a taça das casas! 🏆</p>
          </div>
        </div>
      </div>

      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>

    <?php
    if (isset($_SESSION['usuario_id'])) {
      // Consulta para obter os dados do usuário
      $sql = "SELECT * FROM usuario WHERE id_usuario = " . $_SESSION['usuario_id'];
      $result = $conexao->query($sql);

      if ($result && $result->num_rows > 0) {
        $dados_usuario = $result->fetch_assoc();
        $usuario = new Usuario(
          $dados_usuario['id_usuario'],
          $dados_usuario['nome'],
          $dados_usuario['email'],
          $dados_usuario['senha'],
          $dados_usuario['pontos'],
          $dados_usuario['casa_id']
        );

        echo '<div class="welcome">';
        echo '<h1>Vamgark só existe porque você está aqui, ' . $usuario->getNome() . '!</h1>'; 
        echo '<h2>Comece a Explorar!</h2>';
        echo '<h1><i class="fas fa-arrow-down"></i></h1>';
        echo '</div>';
      } else {
        // Trata o erro da consulta (opcional)
        echo "Erro na consulta: " . $conexao->error;
      }
    } else {
      // Redireciona para a página de login se o usuário não estiver logado
      header("Location: ../../login.php"); 
      exit();
    }
    ?>
    <div class="container pure-g">
        <div class="pure-u-1 pure-u-md-4-6 pure-g principais">
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">COMECE A ESTUDAR</div>
                <img src="../../img/livros.png" alt="">
                <p>Os cursos da <a id="dourado" href="#">Vamgark</a> são ricos em conteúdos precisos e são renovados todos os anos, <a id="dourado" href="#">comece já!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">OFERTAS IMPERDÍVEIS</div>
                <img src="../../img/varinha.png" alt="">
                <p>Nossa Loja está receada de novidades quentinhas, <a id="dourado" href="#">venha conferir!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">AGENDE UMA VISITA</div>
                <img src="../../img/loja.png" alt="">
                <p>Estamos abertos para visitação em <a id="dourado" href="#">várias</a> épocas do ano, com incriveis <a id="dourado" href="#">oficinas interativas!</a></p>
            </div>
            <div class="pure-u-md-1-2 item">
                <div class="item-titulo">O QUE ESTÃO FALANDO</div>
                <div class="posts"><h1><a id="dourado" href="#">+137</a> POSTS</h1>
                <h5>Na última hora!</h5></div>
                <p>Você sabia que em <a id="dourado" href="#">Vamgark</a> há uma comunidade ativa <a id="dourado" href="#">livre de filtros e censura</a> promovendo o pensamento de nossos alunos? <a id="dourado" href="#">Seja um deles!</a></p>
            </div>
        </div>
        <div class="pure-u-1 pure-u-md-2-6 quiz-container">
        <div class="quiz-item">
  <h1>Enquete!</h1>
  <p>Vote na melhor casa e ajude a sua a <a id="dourado" href="#">vencer!</a></p>
  <div class="quiz-buttons">

    <button id="grifinoria" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'grifinoria'); ?>"> 
      Grifinória
      <div class="barra-progresso barra-progresso-invisivel"> 
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="lufa-lufa" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'lufa-lufa'); ?>">
      Lufa-Lufa
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="corvinal" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'corvinal'); ?>">
      Corvinal
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

    <button id="sonserina" data-votos="<?php echo calcularPorcentagemVotos($conexao, 'sonserina'); ?>">
      Sonserina
      <div class="barra-progresso barra-progresso-invisivel">
        <div class="porcentagem"></div> 
      </div>
    </button>

  </div>
</div>
    </div>
    </div>
    <div class="pure-g container">
    <div class="centralizado pure-g pure-u-1 pure-u-md-1-2">
      <div class="barrinha"></div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/grifinoria-flag.png" alt="">
        <h1>1º  <a id="dourado">650pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/corvinal-flag.png" alt="">
        <h1>3º  <a id="dourado">365pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/lufalufa-flag.png" alt="">
        <h1>2º  <a id="dourado">520pts</a></h1>
      </div>
      <div class="pure-u-1-4 flag">
        <img src="../../img/sonserina-flag.png" alt="">
        <h1>4º  <a id="dourado">105pts</a></h1>
      </div>
    </div>
    <div class="pontuacao pure-u-1 pure-u-md-1-2">
        <h1><a id="dourado">Pontuação Geral </a>das casas em tempo real!</h1>
        <button class="suacasa">Sua Casa</button>
    </div>
    </div>

  </main>

  <?php include '../includes/footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
          
        },
        autoplay: {
      delay: 3000, // Tempo de espera entre os slides em milissegundos
      disableOnInteraction: false, // Continua o autoplay mesmo após a interação do usuário
    },
      });
    });
    const botoes = document.querySelectorAll('.quiz-buttons button');

botoes.forEach(botao => {
  botao.addEventListener('click', () => {
    // Desabilita todos os botões
    botoes.forEach(b => b.disabled = true);

    // Mostra e anima as barras de progresso
    const barras = document.querySelectorAll('.barra-progresso');
    barras.forEach(barra => {
      barra.style.display = 'block';
      setTimeout(() => {
        barra.style.width = barra.parentElement.dataset.votos + '%';
      }, 100); 
    });

    // Adiciona a classe "clicado" a todos os botões
    botoes.forEach(b => b.classList.add('clicado'));

    // Envia o voto para o servidor via AJAX
    const casa = botao.id; 
    const xhr = new XMLHttpRequest();
    xhr.open('POST', '../../database/votar.php', true); 
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (this.status == 200) {
        console.log(this.responseText);
        atualizaPorcentagem();
      }
    }
    xhr.send('casa=' + casa); 
  });
});

function atualizaPorcentagem() {
  const xhr = new XMLHttpRequest();
  xhr.open('GET', '../../database/obter_votos.php', true); 
  xhr.onload = function () {
    if (this.status == 200) {
      const votos = JSON.parse(this.responseText);
      for (const casa in votos) {
        const botao = document.getElementById(casa);
        if (botao) {
          botao.dataset.votos = votos[casa];
          botao.querySelector('.porcentagem').style.width = votos[casa] + '%';
        }
      }
    }
  }
  xhr.send();
}
  </script>
</body>
</html>