<?php
session_start();

$senha_digitada = $_POST['senha'];
$tipo_usuario = $_POST['tipo'];







if ($senha_digitada == "123456" && $tipo_usuario == "1") {
    
    $_SESSION['logado'] = true;
    
    header("Location: ../dicionario.php"); 
    exit(); 

} else {
   
    echo "<script>alert('Senha incorreta!'); window.location.href='../login.php';</script>";
}
?>