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

## inserindo noticias

INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'meu pai ganhou na mega-sena',
    'to rico, Tchau pra vcs',
    'Jogou e ganhou',
    'premio.jpg',
    1
);

INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'Corinthians classificado para pré-libertadores',
    'Conseguimos se classificar na pura sorte ',
    'Jogou e Conseguiu',
    'corinthians.jpg',
    4
);

INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'Ruan é gostoso!',
    'ele é o cara mais Gostoso do mundo!',
    'Ruan Premiado',
    'ruan.jpg',
    3
);

INSERT INTO noticias(titulo, texto, resumo, imagem, usuario_id)
VALUES (
    'miau, miau',
    'Gatos são fodas!',
    'Gato falante foda-se',
    'miau.jpg',
    4
);

## Leitura De Dados da tabela "noticias"

SELECT data, titulo FROM noticias;

SELECT nome, email, tipo FROM usuarios;

SELECT nome, email, tipo FROM usuarios; WHERE tipo = 'editor';


## Atualização de Dados dos Usuários

UPDATE usuarios SET email = 'Ruan@gmail.comAtualizado' WHERE id = 1';

## Excluindo Dados da tabela "noticias"

DELETE FROM noticias WHERE id = 2;