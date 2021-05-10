<?php 
include_once('../funcoes.php');

try {
    $bean = array();
    // controle
    $bean['comentario'] = $_POST['comentario'];
    // modelo
    $conexao = conectar();
    $sql = "INSERT INTO comentarios (comentario) VALUES (?)";
    $st = $conexao->prepare($sql);
    $st->bindParam(1, $bean['comentario']);
    $st->execute();
    $id = $conexao->lastInsertId();

    // visao
?>
<html>
<body>
    <h1>Tua opinião é muito importante!</h1>
    <p>Estou trabalhando para melhorar sempre. Obrigado pela colaboração!!</p>
</body>
</html>
<?php
}
catch (Exception $e) {
    echo '{"ok": false, "error": "' . $e . ':' . $e->getMessage() . '"}';
}
