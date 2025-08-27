# Perguntas de desenvolvimento:

- objetivo:
    - sistema de gerenciamento de salas
- o que não era para ter
    - cores azul e preto
- cores, estilos e estetica
    - referencia
    - como seja exibido
- quais funções deveria ter?
    - poder cadastrar salas
    - editar salas
    - desativar salas
    - cadastrar professores
    - agendar uso de sala
    - visualizar estado das salas
    - cadastrar turmas

- qual tecnologia:
    - bootstrap
    - mysql
    - html/css/js
    - php

***
- qual o fluxo do sistema:
    - 1º pagina -> index.php
        - visualizar salas (demonstrar salas disponiveis para reserva ou as já reservadas)
        - no header devera ter botões de acesso (reservar salas, cad. docentes, cad. salas, cad. turmas) 
        - reservar sala.
        - cad. docentes:
            - nome
            - area do docente
            - RA docente
        - cad. salas
            - nº sala
            - qnts suporte de alunos
            - tipo sala
            - situação
        - cad. turmas
            - qnts alunos
            - tipo da turma
            - identificação da turma
            - horario da turma




```git

git add .
git commit -m"comentario"
git push

```


<!-- Seleciona os registros dos campos que ue informei -->
SELECT trs.id, ts.identificacao, tt.nome, tt.sigla
FROM tb_reservas_sala trs <!-- trs seria um "Apelido" que eu criei para a tabela, pois o nome estava grande, repeti este processo nas outras tabelas -->
    INNER JOIN tb_sala ts ON trs.sala_id = ts.id
    INNER JOIN tb_turma tt ON trs.turma_id = tt.id
    INNER JOIN tb_docente td ON trs.docente_id = td.id;
    