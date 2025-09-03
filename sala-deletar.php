<?php

require('./config.php');

$id = $_GET['id_deletar'];

const DESATIVADO = 0;
const ATIVADO = 1;

$script = "UPDATE tb_sala SET desativado = :desativar WHERE id = :id";

$scriptPreparar = $conn->prepare($script)->execute([
":desativar" => ATIVADO,
":id" => $id
]);

header("location:./cad-sala.php");