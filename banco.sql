CREATE DATABASE bd_petshop_catos;
USE bd_petshop_catos;
 
CREATE TABLE tb_catos
(
    id_cato INT PRIMARY KEY AUTO_INCREMENT,
    rga_cato CHAR(9) NOT NULL,
    nome_cato VARCHAR(35) NOT NULL,
    raca_cato VARCHAR(35) NOT NULL,
    pelagem_cato VARCHAR(35) NOT NULL,
    data_nasc_cato DATE NOT NULL
);
