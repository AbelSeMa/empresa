DROP TABLE IF EXISTS departamentos CASCADE;

CREATE TABLE departamentos (
        id              BIGSERIAL       PRIMARY KEY
    ,   codigo          NUMERIC(2)      NOT NULL UNIQUE
    ,   denominacion    varchar(255)    NOT NULL

);

-- Fixtures (datos de pruebas en desarrollo):

INSERT INTO departamentos (codigo, denominacion)
    VALUES  (10, 'Informatica'),
            (20, 'Administrativo'),
            (30, 'Prevención'),
            (40, 'Laboratorio'),
            (50, 'Automoción');
                        