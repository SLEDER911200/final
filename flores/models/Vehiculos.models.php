<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');
class Vehiculos
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from Vehiculos";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($vehiculo_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM Vehiculos WHERE vehiculo_id = $vehiculo_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($marca, $modelo, $año, $placa, $color, $propietario_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into Vehiculos(marca,modelo,año,placa,color,propietario_id,) values ( '$marca', '$modelo', '$año', '$placa', '$color', $propietario_id)";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($vehiculo_id, $marca, $modelo, $año, $placa, $color, $propietario_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "update Vehiculos set marca='$marca',modelo='$modelo',año='$año',placa='$placa',color='$color',propietario_id=$propietario_id where vehiculo_id= $vehiculo_id";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($vehiculo_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from Vehiculos where vehiculo_id = $vehiculo_id";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}
