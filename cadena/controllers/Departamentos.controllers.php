<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Departamentos.models.php");
error_reporting(0);

$Departamentos = new Departamentos;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Departamentos->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $departamento_id = $_POST["departamento_id"];
        $datos = array();
        $datos = $Departamentos->uno($departamento_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $departamento_id = $_POST["departamento_id"];
        $nombre_departamento = $_POST["nombre_departamento"];
        $ubicacion = $_POST["ubicacion"];
        $telefono = $_POST["telefono"];
        $presupuesto = $_POST["presupuesto"];
        $jefe = $_POST["jefe"];
        $descripcion = $_POST["descripcion"];

        $datos = array();
        $datos = $Departamentos->Insertar( $nombre_departamento, $ubicacion, $telefono, $presupuesto, $jefe, $descripcion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $departamento_id = $_POST["departamento_id"];
        $nombre_departamento = $_POST["nombre_departamento"];
        $ubicacion = $_POST["ubicacion"];
        $telefono = $_POST["telefono"];
        $presupuesto = $_POST["presupuesto"];
        $jefe = $_POST["jefe"];
        $descripcion = $_POST["descripcion"];
        $datos = array();
        $datos = $Departamentos->Actualizar($departamento_id, $nombre_departamento, $ubicacion, $telefono, $presupuesto, $jefe, $descripcion);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $departamento_id = $_POST["departamento_id"];
        $datos = array();
        $datos = $Departamentos->Eliminar($departamento_id);
        echo json_encode($datos);
        break;
}
