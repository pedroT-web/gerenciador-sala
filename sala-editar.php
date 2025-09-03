<?php

require("./config.php");

$id = $_GET['id_editar'];
$identificacao = $_GET['identificacao_sala'];
$qtd_alunos = $_GET['qtd_alunos'];
$sala = $_GET['tipo_da_sala'];

$scriptAtualizar = "UPDATE tb_sala SET identificador = :identificacao, quant_suporte_alunos = :qntd_alunos, tipo_sala = :tipo_da_sala WHERE id = :id";
$scriptPreparar = $conn->prepare($scriptAtualizar)->execute([
":identificacao" => $identificacao,
":qntd_alunos" => $qtd_alunos,
":tipo_da_sala" => $sala
]);