<?php
// 1. Inicia a sessão para poder manipulá-la
session_start();

// 2. Limpa todas as variáveis de sessão (como senha, tipo de usuário, etc)
$_SESSION = array();

// 3. Destrói a sessão no servidor
session_destroy();

// 4. Redireciona o usuário de volta para a página de login
// O "../" serve para sair da pasta "api" e voltar para a pasta principal
header("Location: ../login.php");
exit();
?>