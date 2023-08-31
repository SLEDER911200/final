<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');
class Departamentos
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from Departamentos";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($departamento_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM Departamentos WHERE departamento_id = $departamento_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($nombre_departamento, $ubicacion, $telefono, $presupuesto, $jefe, $descripcion)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into Departamentos(nombre_departamento,ubicacion,telefono,presupuesto,jefe,descripcion) values ( '$nombre_departamento', '$ubicacion', '$telefono', '$presupuesto', '$jefe', '$descripcion')";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($departamento_id, $nombre_departamento, $ubicacion, $telefono, $presupuesto, $jefe, $descripcion)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "update Departamentos set nombre_departamento='$nombre_departamento',ubicacion='$ubicacion',telefono='$telefono',presupuesto='$presupuesto',jefe='$jefe',descripcion='$descripcion' where departamento_id= $departamento_id";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($departamento_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from Departamentos where departamento_id = $departamento_id";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}
