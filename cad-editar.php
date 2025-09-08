<?php require './template/header.php';

$id = $_POST['id_invisivel'];
$identificador = $_POST['txtIdentificacao'];
$suporte = $_POST['txtQntdSuporteAlunos'];
$tipo_sala = $_POST['tipo-sala'];

$scriptUpdate = "UPDATE tb_sala SET identificacao = :identificador, quant_suporte_alunos = :suporte, tipo_sala = :sala WHERE id = :id";
$resultadoUpdate = $conn->prepare($scriptUpdate);

$resultadoUpdate->execute([
    ":identificador" => $identificador,
    ":suporte" => $suporte,
    ":sala" => $tipo_sala,
    ":id" => $id
]);

$conn="";

?>

<script>
    window.location.href = './cad-sala.php';
</script>
