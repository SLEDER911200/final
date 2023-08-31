<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Empleados.models.php");
error_reporting(0);

$Empleados = new Empleados;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Empleados->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $empleado_id = $_POST["empleado_id"];
        $datos = array();
        $datos = $Empleados->uno($empleado_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $empleado_id = $_POST["empleado_id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $puesto = $_POST["puesto"];
        $departamento_id = $_POST["departamento_id"];

        $datos = array();
        $datos = $Empleados->Insertar( $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $puesto, $departamento_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $empleado_id = $_POST["empleado_id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $direccion = $_POST["direccion"];
        $telefono = $_POST["telefono"];
        $puesto = $_POST["puesto"];
        $departamento_id = $_POST["departamento_id"];
        $datos = array();
        $datos = $Empleados->Actualizar($empleado_id, $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $puesto, $departamento_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $empleado_id = $_POST["empleado_id"];
        $datos = array();
        $datos = $Empleados->Eliminar($empleado_id);
        echo json_encode($datos);
        break;
}
