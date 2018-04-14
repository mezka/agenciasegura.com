create table consultas(
   consultas_id INT NOT NULL AUTO_INCREMENT,
   consultas_nombre VARCHAR(50) NOT NULL,
   consultas_apellido VARCHAR(50) NOT NULL,
   consultas_email VARCHAR(50) NOT NULL,
   consultas_telefono VARCHAR(50) NOT NULL,
   consultas_motivo VARCHAR(50) NOT NULL,
   consultas_mensaje VARCHAR(500) NOT NULL,
   consultas_fecha DATE,
   PRIMARY KEY ( consultas_id )
);