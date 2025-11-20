CREATE DATABASE veterinaria_caninos;
USE veterinaria_caninos;

-- TABLA CLIENTE
CREATE TABLE Cliente (
    ID_Cliente INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Apellido VARCHAR(50) NOT NULL,
    DNI VARCHAR(20) UNIQUE NOT NULL,
    Domicilio VARCHAR(100),
    Numero_Telefono VARCHAR(20)
);

-- TABLA MASCOTA
CREATE TABLE Mascota (
    ID_Mascota INT AUTO_INCREMENT PRIMARY KEY,
    Nombre VARCHAR(50) NOT NULL,
    Sexo VARCHAR(20),
    Especie VARCHAR(50),
    Numero_Identificacion VARCHAR(40) UNIQUE,
    ID_Dueño INT NOT NULL,
    FOREIGN KEY (ID_Dueño) REFERENCES Cliente(ID_Cliente)
);

-- TABLA VETERINARIA (reservas)
CREATE TABLE Veterinaria (
    Numero_Orden INT AUTO_INCREMENT PRIMARY KEY,
    Servicios VARCHAR(150),
    ID_Cliente INT NOT NULL,
    ID_Mascota INT NOT NULL,
    FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente),
    FOREIGN KEY (ID_Mascota) REFERENCES Mascota(ID_Mascota)
);
