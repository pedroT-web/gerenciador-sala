<?php
require('./config.php');
echo '<h1>sala-cadastro.php';

$identificador = $_POST['txtIdentificacao'];
$qtd_alunos    = $_POST['txtQntdSuporteAlunos'];
$tipo_sala     = $_POST['tipo-sala'];

$script = "INSERT INTO tb_sala(identificacao, quant_suporte_alunos, tipo_sala)
    VALUES (:identificador, :qtd_alunos, :tipo_da_sala)";
$scriptPreparar = $conn->prepare($script)->execute([
    ":identificador" => $identificador,
    ":qtd_alunos" => $qtd_alunos,
    ":tipo_da_sala" => $tipo_sala
]);

if ($scriptPreparar) {
    // Ele retorna o ultimo id Inserido
    $ultimoId = $conn->lastInsertId();
    header("location:./cad-sala.php?lastId={$ultimoId}");
}
