<div class="modal fade" id="modalReserva" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./reservar.php" method="POST" id="form-reserva">
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label for="drop-sala" class="fw-semibold my-auto">Sala:</label>
                        <select id="drop-sala" name="drop-sala" class="form-select">
                            <option selected>Selecione a Sala</option>
                            <option value="1">Sala 4</option>
                            <option value="2">Sala 5</option>
                            <option value="3">Sala 6(hardware)</option>
                        </select>
                    </div>
                    <div class="campo-turma d-flex gap-2 mt-2">
                        <label for="drop-turma" class="fw-semibold my-auto">Turma:</label>
                        <select id="drop-turma" name="drop-turma" class="form-select">
                            <option selected>Selecione a Turma</option>
                            <option value="1">TI24</option>
                            <option value="2">TI26</option>
                            <option value="3">Outros...</option>
                        </select>
                    </div>
                    <div class="campo-docente d-flex gap-2 mt-2">
                        <label for="drop-docente" class="fw-semibold my-auto">Docente:</label>
                        <select id="drop-docente" name="drop-docente" class="form-select">
                            <option selected>Selecione o Docente</option>
                            <option value="1">Vagner</option>
                            <option value="2">Paulo</option>
                            <option value="3">Outros...</option>
                        </select>
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Fechar
                </button>
                <button type="submit" class="btn btn-primary" form="form-reserva">
                    Reservar
                </button>
            </div>
        </div>
    </div>
</div>