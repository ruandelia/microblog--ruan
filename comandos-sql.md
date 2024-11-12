# Operações CRUD usando sql

## Resumo

- C: Criar/inserir dados --> INSERT
- R: (R) Ler dados       --> SELECT
- U: (U) Atualizar Dados --> UPDATE
- D: (D) Excluir Dados   --> DELETE

## Exemplos para Tabela "usuarios"

## Inserindo usuarios

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES ('Ruan', 'Exemplo@gmail.com', '123Senac', 'admin');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES ('Felipe', 'Felipe@gmail.com', 'Senac123', 'editor');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES ('lívia', 'livia@gmail.com', 'aiii', 'editor');

INSERT INTO usuarios(nome, email, senha, tipo)
VALUES ('Magal', 'Magal@gmail.com', 'Miau', 'editor');