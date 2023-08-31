-- Creación de la tabla 'Propietarios'
CREATE TABLE Propietarios (
    propietario_id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    dni VARCHAR(20) UNIQUE,
    direccion VARCHAR(255),
    telefono VARCHAR(15)
);

-- Creación de la tabla 'Vehículos'
CREATE TABLE Vehiculos (
    vehiculo_id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50),
    modelo VARCHAR(50),
    año YEAR,
    placa VARCHAR(10) UNIQUE,
    color VARCHAR(30),
    propietario_id INT,
    FOREIGN KEY (propietario_id) REFERENCES Propietarios(propietario_id) ON DELETE CASCADE
);
