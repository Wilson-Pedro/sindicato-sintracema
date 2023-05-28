<?php
include('db/conexao.php');

$query = "SELECT * FROM noticias";
$resultado = $mysqli->query($query);

while ($row = $resultado->fetch_assoc()) {
    $titulo = $row['titulo'];
    $descricao = $row['descricao'];
    $caminho = $row['caminho'];
    $caminhoCorrigido = str_replace("noticias/noticias/", "img-noticias/", $caminho);

    echo "<h2>$titulo</h2>";
    echo "<p>$descricao</p>";
    echo "<img src=\"$caminhoCorrigido\" alt=\"$titulo\">";
    echo "<hr>";
}

$resultado->free();
$mysqli->close();
?>
