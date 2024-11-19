<?php
session_start(); // Inicia a sessão

// Verifica se a variável de sessão do usuário está definida
if (isset($_SESSION['usuario_id'])) {
  // Se não estiver logado, redireciona para a página de login
  header("Location: index.php");
  exit(); // Encerra a execução do script
}

// Se estiver logado, continua a execução da página atual
// ...
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php include './includes/head.php' ?>
    <title>Vamgark - Login/Registro</title>
    <link rel="stylesheet" href="./style/menu.css">
    <link rel="icon" href="../img/vamgark-icon.png"> <!-- Icone da Página -->
</head>
<body class="menu">

<div class="login p-5">
    <div class="col-6 p-4">
        <div>
            <img class="logo-small" src="../img/vamgark-icon.png" alt="Logo Vamgark">
        </div>
        <div>
            <span class="font f-32 f-w">Entrar ou Registrar</span>
        </div>
        <div>
            <span class="f-24 font f-w">Use sua conta Vamgark</span>
        </div>
    </div>

    <div class="flex-column col-6 d-flex justify-content-evenly">
        <form id="login-form" method="post">
            <div>
                <input type="text" id="email" name="email" placeholder="Seu E-mail" required>
                <div id="email-error" class="error-message text-danger"></div>
            </div>
            <div id="nome-campo" style="display: none;">
                <input type="text" id="nome" name="nome" placeholder="Seu Nome">
                <div id="nome-error" class="error-message text-danger"></div>
            </div>
            <div id="senha-campo" style="display: none;">
                <input type="password" id="senha" name="senha" placeholder="Sua Senha">
                <div id="senha-error" class="error-message text-danger"></div>
            </div>
            <div>
                <span class="font-light f-w f-16">
                    Fique atento, apenas e-mails Vamgark são aceitos no login.
                    <a href="./Politicas" target="_blank">
                        <span class="font">Saiba mais sobre as Políticas de Login da Vamgark.</span>
                    </a>
                </span>
            </div>
            <div class="d-flex flex-inline justify-content-end">
                <button type="submit" class="btn-2 rounded-5 btn px-4 py-2" id="botao-submit">
                    <span class="font f-12">Próximo</span>
                </button>
            </div>
        </form>
    </div>
</div>

<script src="../models/login.js"></script> 
</body>
</html>
