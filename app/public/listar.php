<?php
include_once('../funcoes.php');

// modelo
$conexao = conectar();
$consulta = $conexao->prepare("SELECT * FROM comentarios");
$lista = array();
if ($consulta->execute()) {
    while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        $lista[] = $linha;
    }
}

// visao
echo json_encode($lista);
