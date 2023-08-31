<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Propietarios.models.php");
error_reporting(0);

$Propietarios = new Propietarios;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Propietarios->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $propietario_id = $_POST["propietario_id"];
        $datos = array();
        $datos = $Propietarios->uno($propietario_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
       
        $nombre = $_POST["nombre"];
        $dni = $_POST["dni"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];

        $datos = array();
        $datos = $Propietarios->Insertar( $nombre, $dni, $direccion, $telefono);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $propietario_id = $_POST["propietario_id"];
        $nombre = $_POST["nombre"];
        $dni = $_POST["dni"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $datos = array();
        $datos = $Propietarios->Actualizar($propietario_id, $nombre, $dni, $direccion, $telefono);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $propietario_id = $_POST["propietario_id"];
        $datos = array();
        $datos = $Propietarios->Eliminar($propietario_id);
        echo json_encode($datos);
        break;
}
