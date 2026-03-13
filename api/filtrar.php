<?php

session_start();
require_once '../config/database.php';

header('Content-Type: application/json');

$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case 'GET':
        // 1. Pegamos a letra enviada pelo JS. Se não vier nada, usamos vazio.
        $letra = isset($_GET['letra']) ? $conn->real_escape_string($_GET['letra']) : '';

        // 2. Se o usuário enviou uma letra, filtramos. Se não, trazemos tudo.
        if ($letra !== '') {
            // Usamos a variável $letra seguida do símbolo % (que significa "qualquer coisa depois")
            $sql = "SELECT * FROM palavras WHERE nome_palavra LIKE '$letra%' ORDER BY nome_palavra ASC";
        } else {
            $sql = "SELECT * FROM palavras ORDER BY nome_palavra ASC";
        }

        $result = $conn->query($sql);
        $palavras = [];

        if ($result){
            while($row = $result->fetch_assoc()){
                $palavras[] = $row;
            }
        }

        echo json_encode(["success" => true, "data" => $palavras]);
        break;
}
?>