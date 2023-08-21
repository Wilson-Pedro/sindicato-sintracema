<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = 'ti1234';
    $database = 'sintracema';
    
    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error){
        die("Falha ao conectar no banco de dados: ". $mysqli->error);
    }
?>