-- Creación de la tabla 'Departamentos'
CREATE TABLE Departamentos (
    departamento_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_departamento VARCHAR(255) NOT NULL,
    ubicacion VARCHAR(255),
    telefono VARCHAR(15),
    presupuesto DECIMAL(10,2),
    jefe VARCHAR(255),
    descripcion TEXT
);

-- Creación de la tabla 'Empleados'
CREATE TABLE Empleados (
    empleado_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    apellido VARCHAR(255),
    fecha_nacimiento DATE,
    direccion VARCHAR(255),
    telefono VARCHAR(15),
    puesto VARCHAR(255),
    departamento_id INT,
    FOREIGN KEY (departamento_id) REFERENCES Departamentos(departamento_id) ON DELETE SET NULL
);
