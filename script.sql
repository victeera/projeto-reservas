CREATE DATABASE projeto_reservas;

USE projeto_reservas;

CREATE TABLE carros(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(30) NOT NULL
);

CREATE TABLE reservas(
    id INT PRIMARY KEY AUTO_INCREMENT,
    data_inicio DATE,
    data_fim DATE,
    pessoa VARCHAR(100),
    id_carro INT,

    FOREIGN KEY (id_carro)
    REFERENCES carros(id)
);

INSERT INTO carros SET nome = "Pali";
INSERT INTO carros SET nome = "Voyage";
INSERT INTO carros SET nome = "Corola";
INSERT INTO carros SET nome = "Hilux";
INSERT INTO carros SET nome = "Camaro";

INSERT INTO reservas (data_inicio, data_fim, pessoa, id_carro)
VALUES ('2021-01-31', '2021-02-05', 'Victor', 2);
INSERT INTO reservas (data_inicio, data_fim, pessoa, id_carro)
VALUES ('2021-01-26', '2021-01-31', 'Joana', 4);

