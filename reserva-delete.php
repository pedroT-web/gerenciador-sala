<?php
require './config.php';

const RESERVA_DESATIVADA = 1;
const RESERVA_ATIVADA = 0;

$id = $_GET['id_deletar'];

var_dump($id);

$script = "UPDATE tb_reserva_sala SET deletado = :deletado WHERE id = :id";

$resultado = $conn->prepare($script)->execute([
    ":deletado" => RESERVA_DESATIVADA,
    ":id" => $id
]);

header('location:./index.php');
