<?php
require('./config.php');
include './template/header.php';
include './template/modal-cadastro-sala.php';

$scriptSelect = "SELECT * FROM tb_sala";
$scriptResultado = $conn->query($scriptSelect)->fetchALL();
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
            <?php foreach($scriptResultado as $linhas){ ?>
            <tr>
                <th scope="row"><?= $linhas['id'] ?></th>
                <td><?= $linhas['identificacao'] ?></td>
                <td>
                    <a href="#" class="btn btn-warning">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger">
                        <i class="bi bi-trash3-fill"></i>
                    </a>
                </td>
            </tr>

        </tbody>
        <?php } ?>
    </table>
</section>