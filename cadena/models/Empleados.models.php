<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');
class Empleados
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from Empleados";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($empleado_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM Empleados WHERE empleado_id = $empleado_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $puesto, $departamento_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into Empleados(nombre,apellido,fecha_nacimiento,direccion,telefono,puesto,departamento_id) values ( '$nombre', '$apellido', '$fecha_nacimiento', '$direccion', '$telefono', '$puesto', $departamento_id )";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($empleado_id, $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $puesto, $departamento_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "update Empleados set nombre='$nombre',apellido='$apellido',fecha_nacimiento='$fecha_nacimiento',direccion='$direccion',telefono='$telefono',puesto='$puesto',departamento_id=$departamento_id where empleado_id= $empleado_id";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($empleado_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from Empleados where empleado_id = $empleado_id";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}
