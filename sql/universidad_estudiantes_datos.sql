USE universidad_estudiantes;

INSERT INTO universidad (IDUniversidad, Nombre, Ciudad, Provincia, Telefono, C_P, Direccion, Grado)
VALUES
(1, 'Universidad de Málaga', 'Málaga', 'Málaga', '1234567890', 12345, 'Dirección 1', 'Grado A'),
(2, 'Universidad de Sevilla', 'Sevilla', 'Sevilla', '9876543210', 54321, 'Dirección 2', 'Grado B'),
(3, 'Universidad de Cádiz', 'Cádiz', 'Cádiz', '1112223333', 67890, 'Dirección 3', 'Grado C');

INSERT INTO estudiante (IDEstudiante, Nombre, DNI, Email, Apellido, FechaInscripcion, IDUniversidad)
VALUES
(1, 'Juan', '1234567890', 'juan@example.com', 'Pérez', '2023-01-01', 1),
(2, 'María', '2345678901', 'maria@example.com', 'Rodríguez', '2023-01-01', 2),
(3, 'Carlos', '3456789012', 'carlos@example.com', 'Gómez', '2023-01-01', 3),
(4, 'Laura', '4567890123', 'laura@example.com', 'Martínez', '2023-01-01', 1),
(5, 'Ana', '5678901234', 'ana@example.com', 'López', '2023-01-01', 2);
