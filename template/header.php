<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light rounded mb-4">
        <div class="container">
            <div class="navbar-collapse d-lg-flex">
                <a class="navbar-brand col-lg-3 me-0" href="#">Sisteminha Top</a>
                <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Reservas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cadastrar Sala</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cadastrar Docente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Cadastrar Turma</a>
                    </li>
                </ul>
                <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalReserva">
                        <i class="bi bi-bookmark"></i> Reservar
                    </button>
                </div>
            </div>
        </div>
    </nav>
    <?php include './template/modal-reserva.php' ?>