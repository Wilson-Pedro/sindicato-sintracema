<?php
include('../../protect.php');
include('../../../db/conexao.php');

if(isset($_POST['id'])){
    $id = $_POST['id'];

    $mysqli_aprovacao = mysqli_connect('localhost', 'root', '', 'sintracema');
    if (!$mysqli) {
        die('Erro na conexão: ' . mysqli_connect_error());
    }
    $id_aprovacao = 1;

    $sql_aprovacao = "UPDATE filiais SET id_aprovacao = '$id_aprovacao' WHERE id = $id";

    $result = mysqli_query($mysqli_aprovacao, $sql_aprovacao);

    header ('Location: afiliados.php');
} else {
    header ('Location: afiliados.php');
}

