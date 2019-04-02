DROP TABLE public.proyecto;

CREATE TABLE public.proyecto
(
    codigo_pro integer NOT NULL DEFAULT nextval('proyecto_codigo_pro_seq'::regclass),
    descripcion character varying(80) COLLATE pg_catalog."default",
    cantidad integer,
    fecha_ini date,
    fecha_fin date,
    ci_cli integer NOT NULL,
    CONSTRAINT proyecto_pkey PRIMARY KEY (codigo_pro),
    CONSTRAINT ci_cli FOREIGN KEY (ci_cli)
        REFERENCES public.cliente (ci_cli) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE RESTRICT
);