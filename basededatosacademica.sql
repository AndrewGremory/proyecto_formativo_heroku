    CREATE DATABASE bd_academica;
    USE bd_academica;
CREATE TABLE permiso(
    perm_id INT(11),
    perm_nombre CHAR(50),
    perm_acceso  CHAR(60),
    CONSTRAINT PK_PERMISO PRIMARY KEY (perm_id)
);
CREATE TABLE usuarios(
    usua_id INT(11),
    usua_nombre CHAR(50),
    usua_contraseña CHAR(20),
    usua_rol CHAR(20),
    usua_permiso INT(10),
    CONSTRAINT PK_USUARIOS PRIMARY KEY (usua_id),
    CONSTRAINT FK_PERMISO FOREIGN KEY (usua_permiso) REFERENCES permiso(perm_id)
);
CREATE TABLE regional(
    reg_id INT(11),
    reg_nombre CHAR(20),
    reg_direccion CHAR(30),
    reg_telefono CHAR(15),
    reg_usuario INT(20),
    CONSTRAINT PK_REGIONAL PRIMARY KEY (reg_id),
    CONSTRAINT FK_USUARIOS FOREIGN KEY (reg_usuario) REFERENCES usuarios(usua_id)
);
CREATE TABLE centro(
    centro_id INT(11),
    centro_nombre CHAR(20),
    centro_direccion CHAR(50),
    centro_telefono CHAR(15),
    centro_regional INT(30),
    CONSTRAINT PK_CENTRO PRIMARY KEY (centro_id),
    CONSTRAINT FK_REGIONAL FOREIGN KEY (centro_regional) REFERENCES regional(reg_id)
);
CREATE TABLE ficha(
    ficha_id INT(11),
    ficha_nombre CHAR(20),
    ficha_inicio CHAR(40),
    ficha_fin CHAR(30),
    CONSTRAINT PK_FICHA PRIMARY KEY (ficha_id)
);
CREATE TABLE programa(
    progra_id INT(11),
    progra_nombre CHAR(20),
    progra_modalidad CHAR(21),
    progra_tipo CHAR(30),
    CONSTRAINT PK_PROGRAMA PRIMARY KEY (progra_id)
    CONSTRAINT FK_FICHA FOREIGN KEY (progra_id) REFERENCES ficha(ficha_id)
);
CREATE TABLE centro_tiene_programa(
    centro_id INT(11),
    programa_id INT(20),
    CONSTRAINT FK_CENTRO FOREIGN KEY (centro_id) REFERENCES centro(centro_id),
    CONSTRAINT FK_PROGRAMA FOREIGN KEY (programa_id) REFERENCES programa(progra_id)
);
CREATE TABLE competencia(
    comp_id INT(11)INTEGER PRIMARY KEY,
    comp_nombre CHAR(20),
    comp_horas CHAR(10),
    comp_programa INT(20),
    CONSTRAINT PK_COMPETENCIA PRIMARY KEY (comp_id),
    CONSTRAINT FK_PROGRAMA FOREIGN KEY (comp_programa) REFERENCES programa(progra_id)
);
CREATE TABLE rap(
    rap_id INT(11)INTEGER PRIMARY KEY,
    rap_nombre CHAR(20),
    rap_resultado CHAR(40),
    rap_inicio CHAR(60),
    rap_fin CHAR(50),
    rap_horas CHAR(30),
    rap_competencia INT(11),
    rap_fase INT(11),
    CONSTRAINT PK_RAP PRIMARY KEY (rap_id),
    CONSTRAINT FK_COMPETENCIA FOREIGN KEY (rap_competencia) REFERENCES competencia(comp_id),
    CONSTRAINT FK_FASE FOREIGN KEY (rap_fase) REFERENCES fase(fase_id)

);
CREATE TABLE fase(
    fase_id INT(11)INTEGER PRIMARY KEY,
    fase_nombre CHAR(20),
    CONSTRAINT PK_FASE PRIMARY KEY (fase_id)
);
CREATE TABLE rap_ficha_seguimiento(
    rap_id INT(11),
    ficha_id INT(20),
    seguimiento_id INT(30),
    CONSTRAINT FK_RAP FOREIGN KEY (rap_id) REFERENCES rap(rap_id),
    CONSTRAINT FK_FICHA FOREIGN KEY (ficha_id) REFERENCES ficha(ficha_id),
    CONSTRAINT FK_SEGUIMIENTO FOREIGN KEY (seguimiento_id) REFERENCES seguimiento(segui_id)
);
CREATE TABLE seguimiento(
    segui_id INT(11)INTEGER PRIMARY KEY,
    estado_resultado CHAR(12),
    CONSTRAINT PK_SEGUIMIENTO PRIMARY KEY (segui_id)
);
CREATE TABLE ficha_asigna_instructor(
    ficha_id INT(11),
    ins_id INT(11),
    CONSTRAINT FK_FICHA FOREIGN KEY (ficha_id) REFERENCES ficha(ficha_id),
    CONSTRAINT FK_INSTRUCTOR FOREIGN KEY (ins_id) REFERENCES instructor(ins_id)
);
CREATE TABLE instructor(
    ins_id INT(11)INTEGER PRIMARY KEY,
    ins_nombre CHAR(20),
    ins_documento CHAR(12),
    ins_telefono CHAR(30),
    ins_direccion CHAR(50),
    ins_lider CHAR(40),
    CONSTRAINT PK_INSTRUCTOR PRIMARY KEY (ins_id)
);

