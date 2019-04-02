CREATE TABLE cliente
(
  ci_cli integer NOT NULL PRIMARY KEY,
  telf numeric(11,11) NOT NULL,
  domicilio varchar(160) NOT NULL,
  razon_social varchar(50) NOT NULL DEFAULT 'Indefinido'
);

CREATE TABLE colaborador
(
  ci_col INTEGER NOT NULL PRIMARY KEY,
  nombre varchar(40),
  domicilio varchar(80),
  telf integer,
  banco varchar(35),
  num_cuenta integer
);

CREATE TABLE tipo_pago
(
  codigo_tipo_pag serial NOT NULL PRIMARY KEY,
  descripcion varchar(40)
);

CREATE TABLE proyecto
(
  codigo_pro serial NOT NULL PRIMARY KEY,
  descripcion varchar(80),
  cantidad integer,
  fecha_ini date,
  fecha_fin date,
  ci_cli integer NOT NULL,
  CONSTRAINT ci_cli FOREIGN KEY (ci_cli)
    REFERENCES public.cliente (ci_cli) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

CREATE TABLE pago
(
  codigo_pag varchar(10) NOT NULL PRIMARY KEY,
  concepto varchar(25),
  cantidad integer,
  fecha_pago date,
  ci_col integer NOT NULL,
  codigo_tipo_pag integer NOT NULL,
  CONSTRAINT ci_col FOREIGN KEY (ci_col)
    REFERENCES public.colaborador (ci_col) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE RESTRICT,
    CONSTRAINT codigo_tipo_pag FOREIGN KEY (codigo_tipo_pag)
    REFERENCES public.tipo_pago (codigo_tipo_pag) MATCH SIMPLE
    ON UPDATE CASCADE
    ON DELETE RESTRICT
);

CREATE TABLE participan
(
  codigo_par serial NOT NULL,
  ci_col integer NOT NULL,
  codigo_pro integer NOT NULL,
  CONSTRAINT pparticipan_pkey PRIMARY KEY (codigo_par),
  CONSTRAINT ci_col FOREIGN KEY (ci_col)
        REFERENCES public.colaborador (ci_col) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE RESTRICT,
  CONSTRAINT codigo_pro FOREIGN KEY (codigo_pro)
        REFERENCES public.proyecto (codigo_pro) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE RESTRICT      
);