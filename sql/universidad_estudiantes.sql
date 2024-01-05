DROP DATABASE IF EXISTS universidad_estudiantes;
CREATE DATABASE universidad_estudiantes CHARACTER SET utf8mb4;
USE universidad_estudiantes;

CREATE TABLE universidad (
    IDUniversidad INT PRIMARY KEY,
    Nombre VARCHAR(255),
    Ciudad VARCHAR (20),
    Provincia VARCHAR (20),
    Telefono VARCHAR (12),
    C_P INT (5),
    Direccion VARCHAR(150),
    Grado VARCHAR (50)
);

CREATE TABLE estudiante (
    IDEstudiante INT PRIMARY KEY,
    Nombre VARCHAR(20),
    DNI VARCHAR (10),
    Email VARCHAR (50),
    Apellido VARCHAR(20),
    FechaInscripcion DATE,
    IDUniversidad INT (15),
    FOREIGN KEY (IDUniversidad) REFERENCES universidad(IDUniversidad)
);
