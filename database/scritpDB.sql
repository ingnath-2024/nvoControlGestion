-- Crear base de datos
CREATE DATABASE ctrl_gestion;

-- Conectarse a la base de datos
\c ctrl_gestion;

-- Crear tabla cat_origen
CREATE TABLE cat_origen (
    id_cat_origen INTEGER PRIMARY KEY,
    descripcion TEXT
);

-- Crear tabla Destinatario
CREATE TABLE "Destinatario" (
    id_destinatario SERIAL PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);
CREATE TABLE ctrl_gestion_ingreso_documentos (
    id_ctrl_gestion_ingreso_documento SERIAL PRIMARY KEY,
    id_origen_enviado INTEGER NOT NULL,
    id_origen_enviado_dependencia INTEGER NOT NULL,
    id_estatus BOOLEAN NOT NULL,
    fecha_recepcion DATE,
    fecha_oficio DATE,
    folio_ctrl_gestion INTEGER NOT NULL,
    oficio_entrada_congreso_consejeria TEXT NOT NULL,
    folio_volante_segob TEXT,
    fecha_aprobacion DATE NOT NULL,
    asunto TEXT NOT NULL,

    -- Relaciones (ajusta los nombres de tabla y columna si son distintos)
    -- FOREIGN KEY (id_origen_enviado) REFERENCES cat_origen(id_cat_origen),
    -- FOREIGN KEY (id_origen_enviado_dependencia) REFERENCES cat_origen(id_cat_origen)
);
CREATE TABLE ctrl_gestion_turno_seguimiento (
    id_ctrl_gestion_turno_seguimiento SERIAL PRIMARY KEY,
    id_cat_dependencia BIGINT NOT NULL,
    id_ctrl_gestion_ingreso_documento BIGINT NOT NULL,
    fecha_ingreso_turnado DATE,
    oficio_dependencia_terminado TEXT NOT NULL,
    observaciones TEXT,
    created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),
    updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),

    -- Relaciones (debes asegurarte que las tablas referenciadas existen)
    -- FOREIGN KEY (id_cat_dependencia) REFERENCES cat_dependencia(id_cat_dependencia),
    -- FOREIGN KEY (id_ctrl_gestion_ingreso_documento) REFERENCES ctrl_gestion_ingreso_documentos(id_ctrl_gestion_ingreso_documento)
);
CREATE TABLE ctrl_gestion_tt_seguimiento (
    id_ctrl_gestion_tt_seguimiento SERIAL PRIMARY KEY,
    id_ctrl_gestion_ingreso_documento BIGINT NOT NULL,
    id_ctrl_gestion_turno_seguimiento BIGINT NOT NULL,
    id_origen_respuesta_seguimiento BIGINT NOT NULL,
    id_cat_dependencia BIGINT NOT NULL,
    id_tipo_ingreso CHAR(1) NOT NULL,
    oficio_respuesta_seguimiento_UE TEXT,
    fecha_respuesta_seguimiento_UE DATE,
    oficio_alcance_seguimiento TEXT,
    fecha_alcance_seguimiento DATE,
    fecha_aprobacion_seguimiento DATE,
    instruccion TEXT,
    respuesta TEXT,
    created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),
    updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),

    -- Relaciones (ajustables según tu estructura real)
    -- FOREIGN KEY (id_ctrl_gestion_ingreso_documento) REFERENCES ctrl_gestion_ingreso_documentos(id_ctrl_gestion_ingreso_documento),
    -- FOREIGN KEY (id_ctrl_gestion_turno_seguimiento) REFERENCES ctrl_gestion_turno_seguimiento(id_ctrl_gestion_turno_seguimiento),
    -- FOREIGN KEY (id_origen_respuesta_seguimiento) REFERENCES cat_origen(id_cat_origen),
    -- FOREIGN KEY (id_cat_dependencia) REFERENCES cat_dependencia(id_cat_dependencia)
);
CREATE TABLE ctrl_gestion_expediente (
    id_ctrl_gestion_expediente SERIAL PRIMARY KEY,
    id_ctrl_gestion_ingreso_documento BIGINT NOT NULL,
    id_ctrl_gestion_tt_seguimiento BIGINT NOT NULL,
    id_origen_enviado_dependencia BIGINT NOT NULL,
    liga_referencia TEXT,
    id_tipo_ingreso CHAR(1) NOT NULL,
    created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),
    updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT now(),

    -- Relaciones sugeridas (puedes ajustar si usas otros nombres o claves)
    -- FOREIGN KEY (id_ctrl_gestion_ingreso_documento) REFERENCES ctrl_gestion_ingreso_documentos(id_ctrl_gestion_ingreso_documento),
    -- FOREIGN KEY (id_ctrl_gestion_tt_seguimiento) REFERENCES ctrl_gestion_tt_seguimiento(id_ctrl_gestion_tt_seguimiento),
    -- FOREIGN KEY (id_origen_enviado_dependencia) REFERENCES cat_dependencia(id_cat_dependencia)
);
CREATE TABLE "Ctrl_gestion_Destinatario" (
    id_destinatario INTEGER PRIMARY KEY,
    nombre TEXT NOT NULL
);