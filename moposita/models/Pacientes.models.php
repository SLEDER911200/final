<?php
//TODO: Requerimientos 
require_once('../config/conexion.php');
class Pacientes
{
    /*TODO: Procedimiento para sacar todos los registros*/
    public function todos()
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "select * from Pacientes";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para sacar un registro*/
    public function uno($paciente_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "SELECT  * FROM Pacientes WHERE paciente_id = $paciente_id";
        $datos = mysqli_query($con, $cadena);
        return $datos;
    }
    /*TODO: Procedimiento para insertar */
    public function Insertar($nombre, $fecha_nacimiento, $dirección, $telefono, $enfermedad, $medico_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "INSERT into Pacientes(nombre,fecha_nacimiento,dirección,telefono,enfermedad,medico_id) values ( '$nombre', '$fecha_nacimiento', '$dirección', '$telefono', '$enfermedad', $medico_id)";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'Error al insertar en la base de datos';
        }
    }
    /*TODO: Procedimiento para actualizar */
    public function Actualizar($paciente_id, $nombre, $fecha_nacimiento, $dirección, $telefono, $enfermedad, $medico_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "update Pacientes set nombre='$nombre',fecha_nacimiento='$fecha_nacimiento',dirección='$dirección',telefono='$telefono',enfermedad='$enfermedad',medico_id=$medico_id where paciente_id= $paciente_id";
        if (mysqli_query($con, $cadena)) {
            return "ok";
        } else {
            return 'error al actualizar el registro';
        }
    }
    /*TODO: Procedimiento para Eliminar */
    public function Eliminar($paciente_id)
    {
        $con = new ClaseConectar();
        $con = $con->ProcedimientoConectar();
        $cadena = "delete from Pacientes where paciente_id = $paciente_id";
        if (mysqli_query($con, $cadena)) {
            return true;
        } else {
            return false;
        }
    }
}
