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


# Seleciona os registros dos campos que eu informei
SELECT trs.id, ts.identificacao, tt.nome, tt.sigla
FROM tb_reservas_sala trs <!-- trs seria um "Apelido" que eu criei para a tabela, pois o nome estava grande, repeti este processo nas outras tabelas -->
    INNER JOIN tb_sala ts ON trs.sala_id = ts.id
    INNER JOIN tb_turma tt ON trs.turma_id = tt.id
    INNER JOIN tb_docente td ON trs.docente_id = td.id;
    


# Definindo uma função para desativar registro
## não pode deletar nenhum registro da tabela, apenas desativar

const RESERVA_DESATIVADA = 1; -> Criando variáveis constantes, que armazenam magic numbers
const RESERVA_ATIVADA = 0;  -> Criando variáveis constantes, que armazenam magic numbers

$id = $_GET['id_deletar']; -> Requisição GET para pegar o id, do registro que for selecionado

var_dump($id);

$script = "UPDATE tb_reserva_sala SET deletado = :deletado WHERE id = :id"; -> Estrutura do script para atualizar o campo deletado, para que desative o registro da tabela

$resultado = $conn->prepare($script)->execute([
    ":deletado" => RESERVA_DESATIVADA, -> Definindo de 0 para 1, a variavel :deletado
    ":id" => $id
]);

header('location:./index.php');

WHERE trs.deletado != 1"; -> Define que vai selecionar todos os itens que tem o valor do id_deletado diferente de 1, pois 1 - significa que esta sim para desativado, e 0 - significa que está com o valor não para desativado