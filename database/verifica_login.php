<?php
session_start(); // Inicia a sessão

// Verifica se a variável de sessão do usuário está definida
if (!isset($_SESSION['usuario_id'])) {
  // Se não estiver logado, redireciona para a página de login
  header("Location: ../../login.php");
  exit(); // Encerra a execução do script
}

// Se estiver logado, continua a execução da página atual
// ...
?>