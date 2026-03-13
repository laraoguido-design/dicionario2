<?php

session_start();
require_once '../config/database.php';

header('Content-Type: application/json');

// if (!isset($_SESSION['user_id'])) {
//     echo json_encode(["success" => false, "message" => "Acesso negado."]);
//     exit;
// }
$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case 'GET':
        $sql = "SELECT nome_palavra, descricao_palavra, categoria_palavra, exemplo_palavra FROM palavras";
    $result = $conn -> query($sql);
    $palavra = [];


if ($result){
    while($row = $result->fetch_assoc()){
        $palavra[]=$row;
    }
}
echo json_encode(["success" => true, "data" => $palavra]);
break;

//criar

case 'POST':
    $data = json_decode(file_get_contents("php://input"));
    if(!isset($data->nome_palavra)|| !isset($data->descricao_palavra)|| !isset($data->categoria_palavra)|| !isset($data->exemplo_palavra)){
        echo json_encode(["success" => false, "message" => "Dados incompletos. Informe nome e descrição."]);
        exit;
    }
    $nome_palavra = $conn->real_escape_string(trim($data->nome_palavra));
    $descricao_palavra = $conn->real_escape_string(trim($data->descricao_palavra));
    $categoria_palavra = $conn->real_escape_string(trim($data->categoria_palavra));
    $exemplo_palavra = $conn->real_escape_string(trim($data->exemplo_palavra));

    $sql = "INSERT INTO palavras (nome_palavra,descricao_palavra, categoria_palavra, exemplo_palavra) VALUES ('$nome_palavra', '$descricao_palavra', '$categoria_palavra', '$exemplo_palavra')";
    if($conn->query($sql)=== TRUE){
        echo json_encode(["success" => true, "message" => "Palavra adicionada com sucesso!", "id_palavra" => $conn->insert_id]);
    } else {
        echo json_encode(["success"=> false, "message" => "Erro ao adicionar palavra " . $conn->error]);
    }
    break;
}


?>