DROP DATABASE if EXISTS login;

CREATE DATABASE login;

use login;

CREATE Table usuarios(
    id_usuario int AUTO_INCREMENT,
    nombre VARCHAR (50) not NULL,
    apellido VARCHAR (50) not NULL,
    usuario VARCHAR (50) not NULL,
    contraseña VARCHAR (50) NOT NULL,
    rol ENUM('administrador', 'instructor','coordinador'),
    PRIMARY KEY (id_usuario)
);


INSERT INTO usuarios VALUES (NULL, 'Andres Alfonso', 'Amaya Paez', 'Andres', '1234', 'administrador');

CREATE Table instructor(
    id int AUTO_INCREMENT,
    nombre VARCHAR (50) not NULL,
    apellido VARCHAR (50) not NULL,
    PRIMARY KEY (id)
);

INSERT INTO instructor VALUES (NULL, 'Jose David', 'Montesino Hoyos'),
(NULL, 'Linley Catalina ', 'Moscote'),
(NULL, 'Karina', 'Meza'),
(NULL, 'Carlos', 'Mendoza'),
(NULL, 'Maira', 'Diaz');


CREATE Table programa(
    id_programa int AUTO_INCREMENT,
    nombre VARCHAR(100),
    PRIMARY KEY (id_programa)
);

INSERT INTO programa VALUES (NULL, 'Analisis y desarrollo de sistemas de informacion'),
(NULL, 'Ganaderia'),
(NULL, 'Reposteria');


drop Table fichas; 
CREATE Table fichas(
    id_ficha int NOT NULL,
    tipo_programa ENUM('especializacion', 'tecnologo', 'tecnico'),
    nombre_programa int,
    lider_ficha int,
    PRIMARY KEY (id_ficha),
    foreign KEY (nombre_programa) REFERENCES programa (id_programa),
    foreign KEY (lider_ficha) REFERENCES usuarios (id_usuario)
);


CREATE Table rap(
    rap_id int AUTO_INCREMENT,
    rap_nombre varchar (100),
    rap_resultado varchar (1000),
    rap_inicio date,
    rap_fin date,
    rap_horas int,
    rap_competencias varchar (200),
    rap_fase ENUM('')
)






