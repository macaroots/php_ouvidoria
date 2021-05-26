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
?>
<html>
<style>
tr:nth-child(even) {background: #CCC}
</style>
<body>
    <table>
<?php
foreach ($lista as $linha) {
?>
        <tr>
            <td><?php echo $linha['data']; ?></td>
            <td><?php echo $linha['comentario']; ?></td>
        </tr>
<?php
}
?>
    </table>
</body>
</html>
