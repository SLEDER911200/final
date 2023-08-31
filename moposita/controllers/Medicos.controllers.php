<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Medicos.models.php");
error_reporting(0);

$Medicos = new Medicos;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Medicos->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $medico_id = $_POST["medico_id"];
        $datos = array();
        $datos = $Medicos->uno($medico_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
        $medico_id = $_POST["medico_id"];
        $nombre = $_POST["nombre"];
        $especialidad = $_POST["especialidad"];
        $telefono = $_POST["telefono"];
        $licencia = $_POST["licencia"];
        $hospital = $_POST["hospital"];

        $datos = array();
        $datos = $Medicos->Insertar( $nombre, $especialidad, $telefono, $licencia, $hospital);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $medico_id = $_POST["medico_id"];
        $nombre = $_POST["nombre"];
        $especialidad = $_POST["especialidad"];
        $telefono = $_POST["telefono"];
        $licencia = $_POST["licencia"];
        $hospital = $_POST["hospital"];
        $datos = array();
        $datos = $Medicos->Actualizar($medico_id, $nombre, $especialidad, $telefono, $licencia, $hospital);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $medico_id = $_POST["medico_id"];
        $datos = array();
        $datos = $Medicos->Eliminar($medico_id);
        echo json_encode($datos);
        break;
}
