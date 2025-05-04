CREATE DATABASE bd_animais;
USE bd_animais;
 
CREATE TABLE tb_catos
(
    id_cato INT PRIMARY KEY IDENTITY(1, 1),
    rga_cato CHAR(9),
    nome_cato VARCHAR(35),
    pelagem_cato VARCHAR(35),
    idade_cato INT
);
