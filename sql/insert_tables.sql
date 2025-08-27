INSERT INTO tb_sala (identificacao, quant_suporte_alunos, tipo_sala, status) VALUES
('SALA 01', 30, 'Convencional', 1),
('SALA 02', 25, 'Convencional', 1),
('SALA 03', 35, 'Convencional', 1),
('SALA 04', 20, 'Laboratório', 1),
('SALA 05', 20, 'Laboratório', 1),
('SALA 06', 15, 'Laboratório de Hardware', 1),
('SALA 07', 20, 'Laboratório', 1),
('SALA 08', 20, 'Laboratório', 1),
('SALA 09', 20, 'Laboratório', 1),
('SALA 10', 20, 'Laboratório', 1),
('SALA 11', 25, 'Enfermagem', 1),
('SALA 12', 30, 'Convencional', 1),
('SALA 13', 30, 'Convencional', 1),
('SALA 14', 30, 'Convencional', 1),
('SALA 15', 30, 'Convencional', 1),
('SALA 16', 30, 'Convencional', 1),
('SALA 17', 30, 'Convencional', 1),
('SALA 18', 30, 'Convencional', 1);

INSERT INTO tb_docente (nome, area, ra_docente) VALUES
('Carlos Andrade', 'Matemática', 'D123456'),
('Fernanda Lima', 'Biologia', 'D234567'),
('João Silva', 'Informática', 'D345678'),
('Mariana Costa', 'Enfermagem', 'D456789'),
('Roberto Nunes', 'Física', 'D567890');

INSERT INTO tb_turma (nome, sigla, periodo, quant_alunos) VALUES
('Turma de Matemática Aplicada', 'MAT01', 'Noturno', 28),
('Turma de Biologia Geral', 'BIO01', 'Matutino', 32),
('Turma de Informática Básica', 'INF01', 'Vespertino', 25),
('Turma de Enfermagem I', 'ENF01', 'Matutino', 30),
('Turma de Física Experimental', 'FIS01', 'Noturno', 27);

INSERT INTO tb_reserva_sala (sala_id, turma_id, docente_id) VALUES
(4, 1, 1),  -- Sala Laboratório para Matemática
(11, 4, 4), -- Sala de Enfermagem para Enfermagem
(6, 3, 3),  -- Hardware para Informática
(2, 2, 2),  -- Sala Convencional para Biologia
(10, 5, 5); -- Laboratório para Física
 