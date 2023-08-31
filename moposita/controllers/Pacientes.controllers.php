<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Pacientes.models.php");
error_reporting(0);

$Pacientes = new Pacientes;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Pacientes->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $paciente_id = $_POST["paciente_id"];
        $datos = array();
        $datos = $Pacientes->uno($paciente_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $paciente_id = $_POST["paciente_id"];
        $nombre = $_POST["nombre"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $dirección = $_POST["dirección"];
        $telefono = $_POST["telefono"];
        $enfermedad = $_POST["enfermedad"];
        $medico_id = $_POST["medico_id"];

        $datos = array();
        $datos = $Pacientes->Insertar( $nombre, $fecha_nacimiento, $dirección, $telefono, $enfermedad, $medico_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $paciente_id = $_POST["paciente_id"];
        $nombre = $_POST["nombre"];
        $fecha_nacimiento = $_POST["fecha_nacimiento"];
        $dirección = $_POST["dirección"];
        $telefono = $_POST["telefono"];
        $enfermedad = $_POST["enfermedad"];
        $medico_id = $_POST["medico_id"];
        $datos = array();
        $datos = $Pacientes->Actualizar($paciente_id, $nombre, $fecha_nacimiento, $dirección, $telefono, $enfermedad, $medico_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $paciente_id = $_POST["paciente_id"];
        $datos = array();
        $datos = $Pacientes->Eliminar($paciente_id);
        echo json_encode($datos);
        break;
}
