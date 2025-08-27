SELECT trs.id, ts.identificacao, tt.nome, tt.sigla
FROM tb_reservas_sala trs
    INNER JOIN tb_sala ts ON trs.sala_id = ts.id
    INNER JOIN tb_turma tt ON trs.turma_id = tt.id
    INNER JOIN tb_docente td ON trs.docente_id = td.id;
    