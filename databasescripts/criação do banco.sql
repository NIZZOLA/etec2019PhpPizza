

CREATE TABLE Produto (
ProdutoId INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY,
Descricao VARCHAR(200),
Valor DECIMAL(10,2),
Imagem VARCHAR(50),
Titulo VARCHAR(50),
TipoId INTEGER
);

CREATE TABLE TipoProduto (
Descricao VARCHAR(50),
TipoId INTEGER NOT NULL AUTO_INCREMENT PRIMARY KEY
);


ALTER TABLE Produto ADD FOREIGN KEY(TipoId) REFERENCES TipoProduto (TipoId);

-- insere decimais no campo do produto
ALTER TABLE PRODUTO modify Valor Decimal (10,2)

-- inserir dados 1 linha
INSERT INTO TipoProduto ( Descricao ) values
( 'Pizza' );

-- inserir mais de 1 linha
INSERT INTO TipoProduto ( Descricao ) values
( 'Pizza' ),
( 'Refrigerantes' ),
( 'Cerveja' ),
( 'Esfiha' ),
( 'Pizza Doce' ),
( 'Vinhos' );

-- inserir 1 produto
insert into Produto ( Descricao, Valor, Imagem, Titulo, TipoId ) values
( 'Mussarela, Molho, Mangericão, Tomate', 25.99 , 'pizza1.jpg' , 'Pizza Marguerita', 2 );

-- inserir varios produtos
insert into Produto ( Descricao, Valor, Imagem, Titulo, TipoId ) values
( 'Far far away, behind the word mountains, far from the countries Vokalia and Consonantia', 25.99 , 'pizza2.jpg' , 'Italian Pizza', 2 ),
( 'Uma salada grega de pepino, cebola roxa, tomate, azeitonas e queijo feta é o segredo desta pizza de frango grelhado.', 35.00, 'pizza3.jpg', 'Pizza Grega', 2 );



-- UPDATE

update Produto set Valor = 35.00 where produtoid=3




 

