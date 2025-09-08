<?php
include './template/header.php';
include './template/modal-atualizar.php';

$scriptSelect = "SELECT * FROM tb_sala WHERE desativado = 0";
$scriptResultado = $conn->query($scriptSelect)->fetchALL();

if (isset($_POST['cadastrar_sala'])) {
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
                        <button class="btn btn-warning"
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#modalAtualizar"
                            data-bs-identificador="<?= $linhas['identificacao'] ?>"
                            data-bs-suporte="<?= $linhas['quant_suporte_alunos'] ?>"
                            data-bs-tipo="<?= $linhas['tipo_sala'] ?>"
                            data-bs-id="<?= $linhas['id'] ?>">
                            <i class="bi bi-pencil-square"></i>
                        </button>
                        <a href="./sala-deletar.php?id_deletar=<?= $linhas['id'] ?>" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>
                    </td>
                </tr>

        </tbody>


    <?php } ?>
    </table>
</section>

<script>
    const modalAtualizar = document.getElementById('modalAtualizar')
    if (modalAtualizar) {
        modalAtualizar.addEventListener('show.bs.modal', event => {
            const button = event.relatedTarget

            const identificador = button.getAttribute('data-bs-identificador')
            const qtd_acentos = button.getAttribute('data-bs-suporte')
            const tipo_sala = button.getAttribute('data-bs-tipo')
            const id_sala = button.getAttribute('data-bs-id')

            const identificacao = modalAtualizar.querySelector('.modal-body #identificacao')
            const qtd_suporte = modalAtualizar.querySelector('.modal-body #qntd-aluno')
            const tipo = modalAtualizar.querySelector('.modal-body #tipo-sala')
            const id = modalAtualizar.querySelector('.modal-body #id_invisivel');

            identificacao.value = identificador
            qtd_suporte.value = qtd_acentos
            tipo.value = tipo_sala
            id.value = id_sala
        })
    }
</script>