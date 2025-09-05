<?php
require('./config.php');
include './template/header.php';
include './template/modal-cadastro-sala.php';
include './template/modal-atualizar.php';

$scriptSelect = "SELECT * FROM tb_sala WHERE desativado = 0";
$scriptResultado = $conn->query($scriptSelect)->fetchALL();

if(isset($_POST['cadastrar_sala'])){
    $identificador = ['txtIdentificacao'];
    $qtd_alunos = ['txtQntdSuporteAlunos'];
    $tipoDaSala = ['tipo_sala'];
}
?>

<section class="container mt-5">
    <div class="text-end">
        <button type="button" class="btn btn-lg btn-success px-3" data-bs-toggle="modal" data-bs-target="#modalSala">
            <i class="bi bi-plus-circle"></i> Sala
        </button>
    </div>
    <table class="table table-striped table-hover text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Sala</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scriptResultado as $linhas) { ?>
                <tr>
                    <th scope="row"><?= $linhas['id'] ?></th>
                    <td><?= $linhas['identificacao'] ?></td>
                    <td>
                        <a href="./modal-atualizar.php?id_editar=<?= $linhas['id'] ?>&&identificacao_sala=<?= $identificador ?>&&qtd_alunos=<?= $qtd_alunos ?>&&tipo_da_sala=<?= $tipoDaSala ?>" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalAtualizar" >
                            <i class="bi bi-pencil-square"></i>
                        </a>
                        <a href="./sala-deletar.php?id_deletar=<?= $linhas['id'] ?>" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>

        </tbody>

        
    <?php } ?>
    </table>
</section>