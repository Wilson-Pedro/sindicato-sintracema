<?php
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';
    $database = 'sintracema';
    
    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->error){
        die("Falha ao conectar no banco de dados: ". $mysqli->error);
    }
?>