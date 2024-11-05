-- Criando a tabela Clientes
CREATE TABLE Clientes (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(20)
);

-- Criando a tabela Produtos
CREATE TABLE Produtos (
    id_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100),
    preco DECIMAL(10, 2)
);

-- Criando a tabela Vendas
CREATE TABLE Vendas (
    id_venda INT AUTO_INCREMENT PRIMARY KEY,
    id_cliente INT,
    data_venda DATE,
    valor_total DECIMAL(10, 2),
    FOREIGN KEY (id_cliente) REFERENCES Clientes(id_cliente)
);

-- Criando a tabela Itens_Venda
CREATE TABLE Itens_Venda (
    id_item INT AUTO_INCREMENT PRIMARY KEY,
    id_venda INT,
    id_produto INT,
    quantidade INT,
    preco_unitario DECIMAL(10, 2),
    FOREIGN KEY (id_venda) REFERENCES Vendas(id_venda),
    FOREIGN KEY (id_produto) REFERENCES Produtos(id_produto)
);

-- Inserindo dados na tabela Clientes
INSERT INTO Clientes (nome, email, telefone) VALUES
('João Silva', 'joao.silva@email.com', '11987654321'),
('Maria Oliveira', 'maria.oliveira@email.com', '11998765432'),
('Carlos Souza', 'carlos.souza@email.com', '11999887766');

-- Inserindo dados na tabela Produtos
INSERT INTO Produtos (nome_produto, preco) VALUES
('Camiseta', 29.90),
('Calça Jeans', 79.90),
('Tênis Esportivo', 149.90);

-- Inserindo dados na tabela Vendas
INSERT INTO Vendas (id_cliente, data_venda, valor_total) VALUES
(1, '2024-11-01', 109.80),
(2, '2024-11-02', 229.80),
(3, '2024-11-03', 179.90);

-- Inserindo dados na tabela Itens_Venda
INSERT INTO Itens_Venda (id_venda, id_produto, quantidade, preco_unitario) VALUES
(1, 1, 2, 29.90),  -- João Silva comprou 2 camisetas
(1, 2, 1, 79.90),  -- João Silva comprou 1 calça jeans
(2, 2, 2, 79.90),  -- Maria Oliveira comprou 2 calças jeans
(2, 3, 1, 149.90), -- Maria Oliveira comprou 1 tênis esportivo
(3, 1, 1, 29.90),  -- Carlos Souza comprou 1 camiseta
(3, 3, 1, 149.90); -- Carlos Souza comprou 1 tênis esportivo

SELECT * FROM Clientes;

SELECT * FROM Produtos;

--Listar todas as vendas, incluindo o nome do cliente e a data da venda:
SELECT V.id_venda, C.nome, V.data_venda, V.valor_total
FROM Vendas V
JOIN Clientes C ON V.id_cliente = C.id_cliente;

--Listar os itens de cada venda, incluindo o nome do produto, a quantidade e o preço unitário:
SELECT V.id_venda, P.nome_produto, IV.quantidade, IV.preco_unitario
FROM Itens_Venda IV
JOIN Produtos P ON IV.id_produto = P.id_produto
JOIN Vendas V ON IV.id_venda = V.id_venda;

--Consultar as vendas de um cliente específico (por exemplo, João Silva):
SELECT V.id_venda, V.data_venda, V.valor_total
FROM Vendas V
JOIN Clientes C ON V.id_cliente = C.id_cliente
WHERE C.nome = 'João Silva';

--Consultar o valor total de uma venda, incluindo o nome dos produtos e a quantidade:
SELECT V.id_venda, P.nome_produto, IV.quantidade, (IV.quantidade * IV.preco_unitario) AS valor_item
FROM Itens_Venda IV
JOIN Produtos P ON IV.id_produto = P.id_produto
JOIN Vendas V ON IV.id_venda = V.id_venda
WHERE V.id_venda = 1;  -- Alterar o ID da venda conforme necessário

--Listar os produtos mais vendidos (produto com maior quantidade vendida):
SELECT P.nome_produto, SUM(IV.quantidade) AS total_vendido
FROM Itens_Venda IV
JOIN Produtos P ON IV.id_produto = P.id_produto
GROUP BY P.nome_produto
ORDER BY total_vendido DESC
LIMIT 1;  -- Exibe apenas o produto mais vendido

--Calcular o total de vendas por cliente:
SELECT C.nome, SUM(V.valor_total) AS total_compras
FROM Vendas V
JOIN Clientes C ON V.id_cliente = C.id_cliente
GROUP BY C.nome
ORDER BY total_compras DESC;
