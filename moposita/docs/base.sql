-- Creación de la tabla 'Médicos'
CREATE TABLE Medicos (
    medico_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    especialidad VARCHAR(100),
    telefono VARCHAR(15),
    licencia VARCHAR(50) UNIQUE,
    hospital VARCHAR(255)
);

-- Creación de la tabla 'Pacientes'
CREATE TABLE Pacientes (
    paciente_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    fecha_nacimiento DATE,
    dirección VARCHAR(255),
    telefono VARCHAR(15),
    enfermedad VARCHAR(255),
    medico_id INT,
    FOREIGN KEY (medico_id) REFERENCES Medicos(medico_id) ON DELETE SET NULL
);
