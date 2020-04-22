DROP DATABASE IF EXISTS flash_mobile;
CREATE DATABASE flash_mobile CHARACTER SET utf8 COLLATE utf8_spanish2_ci;

USE flash_mobile;

CREATE TABLE encuestas(
id int primary key auto_increment,
fec_encuesta timestamp DEFAULT current_timestamp not null,
full_name varchar(40) not null,
tipo_documento varchar(2) not null,
num_documento int not null,
motivo varchar(10) not null,
nivel_satisfacion int(1) not null,
sol_problemas int not null,
recomendar varchar(2) not null,
comentario varchar(255)
);

SELECT * FROM encuestas;