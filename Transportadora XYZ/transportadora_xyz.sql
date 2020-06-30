CREATE SCHEMA transportadora_XYZ DEFAULT CHARACTER SET utf8;

ALTER DATABASE transportadora_XYZ DEFAULT COLLATE utf8mb4_bin;

DROP SCHEMA transportadora_XYZ;

USE transportadora_xyz;

CREATE TABLE IF NOT EXISTS pacote (
	id INT NOT NULL AUTO_INCREMENT,
    id_status INT NOT NULL,
    id_remetente INT NOT NULL,
    id_destinatario INT NOT NULL,
    data_entrega_real DATE,
    data_entrega_prevista DATE,
    peso FLOAT,
    largura FLOAT,
    altura FLOAT,
    comprimento FLOAT,
    PRIMARY KEY (id),
    CONSTRAINT fk_pacote_remetente 
		FOREIGN KEY (id_remetente) REFERENCES cliente (id),
	CONSTRAINT fk_pacote_destinatario
		FOREIGN KEY (id_destinatario) REFERENCES cliente (id),
	CONSTRAINT fk_pacote_status
		FOREIGN KEY (id_status) REFERENCES status_pac (id)
);

/*INSERT INTO pacote (id_status, id_remetente, id_destinatario, data_entrega_real, data_entrega_prevista, peso, largura, altura, comprimento ) VALUES 
( 1 , 3 , 1 , 01/01/2020 , 02/01/2020, 20 , 1.20 , 1.20 , 1.10 ),
( 2 , 1 , 2 , 03/01/2020 , 04/01/2020, 40 , 2.20 , 2.20 , 2.10 ),
( 3 , 2 , 3 , 05/01/2020 , 06/01/2020, 60 , 3.20 , 3.20 , 3.10 );
*/

SELECT * FROM pacote;

DROP TABLE pacote;

CREATE TABLE IF NOT EXISTS status_pac (
	id INT NOT NULL AUTO_INCREMENT,
    status_pacote VARCHAR(50),
    PRIMARY KEY (id)
    
);

INSERT INTO status_pac (status_pacote) VALUES 
('Cancelado'),
('Entregue'),
('Em processamento'),
('Em transporte');

SELECT * FROM status_pac;

DROP TABLE status_pac;

CREATE TABLE IF NOT EXISTS cliente (
	id INT NOT NULL AUTO_INCREMENT,
    id_endereco INT NOT NULL,
    nome VARCHAR(50),
    email VARCHAR(150),
    telefone VARCHAR(50),
    PRIMARY KEY (id),
    CONSTRAINT fk_cliente_endereco
		FOREIGN KEY (id_endereco) REFERENCES endereco (id)

);

/*INSERT INTO cliente (id_endereco, nome, email, telefone) VALUES 
( 1 , 'Arthur','Arthur@gmail.com','47 9 9999-9999'),
( 2 , 'Marcos','Marcos@gmail.com','47 9 9999-9999'),
( 3 , 'Fabio','Fabio@gmail.com','47 9 9999-9999');
*/

SELECT * FROM cliente;

DROP TABLE cliente;

CREATE TABLE IF NOT EXISTS endereco(
	id INT NOT NULL AUTO_INCREMENT,
    rua VARCHAR(50),
    numero INT NOT NULL,
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(50),
    PRIMARY KEY (id)
    
);

/*INSERT INTO endereco ( rua, numero, bairro, cidade, estado ) VALUES 
('rua1', 100 ,'bairro1' , 'Itajai', 'Santa Catarina'),
('rua2', 200 ,'bairro2' , 'Balneário Camboriu', 'Santa Catarina'),
('rua3', 300 ,'bairro1' , 'São Paulo', 'São Paulo');
*/

SELECT * FROM endereco;

DROP TABLE endereco;