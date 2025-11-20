<?php
include("conexion.php");

// Recibir datos del formulario
$nombreCliente = $_POST['nombreCliente'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$domicilio = $_POST['domicilio'];
$telefono = $_POST['telefono'];

$nombreMascota = $_POST['nombreMascota'];
$sexo = $_POST['sexo'];
$especie = $_POST['especie'];
$identificacion = $_POST['identificacion'];

$servicio = $_POST['servicio'];

// Insertar cliente
$sqlCliente = "INSERT INTO Cliente (Nombre, Apellido, DNI, Domicilio, Numero_Telefono)
               VALUES ('$nombreCliente', '$apellido', '$dni', '$domicilio', '$telefono')";
mysqli_query($conexion, $sqlCliente);

// Obtener ID del cliente insertado
$idCliente = mysqli_insert_id($conexion);

// Insertar mascota
$sqlMascota = "INSERT INTO Mascota (Nombre, Sexo, Especie, Numero_Identificacion, ID_Dueño)
               VALUES ('$nombreMascota', '$sexo', '$especie', '$identificacion', '$idCliente')";
mysqli_query($conexion, $sqlMascota);

// Obtener la mascota
$idMascota = mysqli_insert_id($conexion);

// Insertar reserva/servicio
$sqlReserva = "INSERT INTO Veterinaria (Servicios, ID_Cliente, ID_Mascota)
               VALUES ('$servicio', '$idCliente', '$idMascota')";
mysqli_query($conexion, $sqlReserva);

echo "Turno cargado correctamente.";
?>
