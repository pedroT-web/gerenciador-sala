<div class="modal fade" id="modalAtualizar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal Editar Sala</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="./cad-editar.php" method="POST" id="form-sala-atualizar">
                    <input type="hidden" name="id_invisivel" id="idInvisivel">
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%" for="identificacao" class="fw-semibold my-auto">Identificacao:</label>

                        <input type="text" class="form-control" placeholder="Informe o nome da sala" name="txtIdentificacao" id="identificacao">
                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label style="width: 20%" for="qntd-aluno" class="fw-semibold my-auto">Quant. de alunos:</label>

                        <input type="number" class="form-control" placeholder="Qual a quantdidade de alunos suportados"
                            name="txtQntdSuporteAlunos" id="qntd-aluno" value="">

                    </div>
                    <div class="campo-sala d-flex gap-2 mt-2">
                        <label for="drop-sala" class="fw-semibold my-auto">Sala:</label>
                        <select id="tipo-sala" name="tipo-sala" class="form-select">
                            <option selected>Atual: </option>
                            <option value="Convencional">Convencional</option>
                            <option value="Laboratório">Laboratório</option>
                            <option value="Laboratório Hardware">Laboratório Hardware</option>
                            <option value="Laboratório Enfermagem">Laboratório Enfermagem</option>
                            <option value="Ateliê de Moda">Ateliê de Moda</option>
                            <option value="Ateliê de Design">Ateliê de Design</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Fechar
                </button>
                <button class="btn btn-primary" type="submit" form="form-sala-atualizar" name="atualizar_cadastro">
                    Atualizar
                </button>
            </div>
        </div>
    </div>
</div>