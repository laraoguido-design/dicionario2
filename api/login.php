<?php 
session_start();
require_once '../config/database.php';

header('Content-Type: application/json');
$nome = $conn->real_escape_string(trim($data->nome));
$senha = trim($data->senha);

$sql = "SELECT id_user, nome_user, senha_user 
        FROM user 
        WHERE nome_user = '$nome' 
        LIMIT 1";

$result = $conn->query($sql);

if ($result && $result->num_rows === 1) {

    $user = $result->fetch_assoc();

  
    $hashDoBanco = trim($user['senha_user']);

    if (password_verify($senha, $hashDoBanco)) {
        $_SESSION['user_id'] = $user['id_user'];
        $_SESSION['user_nome'] = $user['nome_user'];

        echo json_encode(["success" => true, "perfil" => $user['nome_user']]);
        exit;
    } else {
        echo json_encode(["success" => false, "message" => "Senha incorreta."]);
        exit;
    }

} else {
    echo json_encode(["success" => false, "message" => "Usuário não encontrado."]);
    exit;
}

?>