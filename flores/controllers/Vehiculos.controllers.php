<?php
/*TODO: Requerimientos */
require_once("../config/cors.php");
require_once("../models/Vehiculos.models.php");
error_reporting(0);

$Vehiculos = new Vehiculos;
switch ($_GET["op"]) {
        /*TODO: Procedimiento para listar todos los registros */
    case 'todos':
        $datos = array();
        $datos = $Vehiculos->todos();
        while ($row = mysqli_fetch_assoc($datos)) {
            $todos[] = $row;
        }
        echo json_encode($todos);
        break;
        /*TODO: Procedimiento para sacar un registro */
    case 'uno':
        $vehiculo_id = $_POST["vehiculo_id"];
        $datos = array();
        $datos = $Vehiculos->uno($vehiculo_id);
        $res = mysqli_fetch_assoc($datos);
        echo json_encode($res);
        break;
        /*TODO: Procedimiento para insertar */
    case 'insertar':
      
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $propietario_id = $_POST["propietario_id"];

        $datos = array();
        $datos = $Vehiculos->Insertar( $marca, $modelo, $año, $placa, $color, $propietario_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para actualizar */
    case 'actualizar':
        $vehiculo_id = $_POST["vehiculo_id"];
        $marca = $_POST["marca"];
        $modelo = $_POST["modelo"];
        $año = $_POST["año"];
        $placa = $_POST["placa"];
        $color = $_POST["color"];
        $propietario_id = $_POST["propietario_id"];
        $datos = array();
        $datos = $Vehiculos->Actualizar($vehiculo_id, $marca, $modelo, $año, $placa, $color, $propietario_id);
        echo json_encode($datos);
        break;
        /*TODO: Procedimiento para eliminar */
    case 'eliminar':
        $vehiculo_id = $_POST["vehiculo_id"];
        $datos = array();
        $datos = $Vehiculos->Eliminar($vehiculo_id);
        echo json_encode($datos);
        break;
}
