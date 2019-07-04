<?php 
include_once("conexion.php");
class Core {
    
    public function ConsultaVehiculo($id_vehiculo){
        $consulta = ("SELECT * FROM vehiculos WHERE id_vehiculos='$id_vehiculo' LIMIT 1");
        $procesar = mysqli_query($_SESSION['conexion_database'],$consulta) or die(mysqli_error($_SESSION['conexion_database']));
        if(mysqli_num_rows($procesar)<=0){
            return "error";
        }else{
            $return = array();
            while($row = mysqli_fetch_array($procesar)){
                array_push($return,$row);
            }
        }

        return $return;
    }

    public function ConsultaVehiculos(){
        $consulta = ("SELECT * FROM vehiculos");
        $procesar = mysqli_query($_SESSION['conexion_database'],$consulta) or die(mysqli_error($_SESSION['conexion_database']));
        if(mysqli_num_rows($procesar)<=0){
            return "error";
        }else{
            $return = array();
            while($row = mysqli_fetch_array($procesar)){
                array_push($return,$row);
            }
        }

        return $return;
    }

    public function RegistrarVehiculo($campos,$values){

        $campos = implode(",",$campos);
        $values = implode("','",$values);
        
        $insert = ("INSERT INTO vehiculos (".$campos.") VALUES ('".$values."')");
   
        mysqli_query($_SESSION['conexion_database'],$insert) or die(mysqli_error($_SESSION['conexion_database']));
        if(mysqli_affected_rows($_SESSION['conexion_database'])<=0){
            return "error";
        }else{
            return "1";
        }

    }

}

?>