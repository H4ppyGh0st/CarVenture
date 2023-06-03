<?php
#include 'menu.html';
include '../conexion/conexion.php';

/* Este archivo se utilizará para generalizar todas las funciones del crud en un solo formulario

*/ 


/*
Elimina los warnings:

*/





$Campo=$_POST['Campo'];
$Id=$_POST["Id"];
$Orden=$_POST['Orden'];
$Trabajador=$_POST['Trabajador'];
$Estado=$_POST['Estado'];
$Direccion =$_POST['Direccion'];
$Cargo=$_POST['Cargo'];
$Tiempo=$_POST['Tiempo'];
$Valor=$_POST['Valor'];
$Auto=$_POST['Auto'];


$IdOrden = ""; 
$IdAuto = "";
$IdTrabajador = ""; 
$IdEstado = ""; 
$IdCargo = ""; 


function sacaId($arg_1, $arg_2){

    
    for($caracteres=0;  $caracteres < strlen($arg_1); $caracteres++ ){

        


       if($arg_1[$caracteres] == "-"){

        break; 
    }
    

      $arg_2 = $arg_2.$arg_1[$caracteres];



      
    }

    return $arg_2;


}


$IdOrden = sacaId($Orden,$IdOrden); 
$IdAuto = sacaId($Auto,$IdAuto); 
$IdTrabajador = sacaId($Trabajador,$IdTrabajador); 
$IdEstado = sacaId($Estado,$IdEstado); 
$IdCargo = sacaId($Cargo,$IdCargo); 









if(isset($_POST['enviarDetalle'])){

    $sql = "INSERT INTO detalleordendetrabajo (Campo,IdOrden,IdAuto,IdTrabajador,IdEstado,Dirección,IdCargo,
    Tiempo, Valor) VALUES (?,?,?,?,?,?,?,?,?)";

    $comando= $conn->prepare($sql);

    
    
    if ($comando->execute([$Campo,$IdOrden,$IdAuto,$IdTrabajador,$IdEstado,$Direccion,$IdCargo, 
    $Tiempo, $Valor])){

        echo $IdAuto;
        echo "Atual";
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../Views/detallesDeOrden/detallesDeOrden.php'; 
        </script>";
    
    }
}



if(isset($_POST['borrarDetalle'])){

    

 
    $sql = "DELETE from detalleordendetrabajo where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../Views/detallesDeOrden/detallesDeOrden.php'; 
        </script>";
    
    }
    
}





if(isset($_POST['modificarDetalle'])){

 #preparé la instrucción de guardado
$sql = "UPDATE detalleordendetrabajo set Campo = ? ,IdOrden= ? ,IdAuto= ? ,IdTrabajador= ?
,IdEstado=? ,Dirección=?,IdCargo=?, Tiempo=?, Valor=? where Id=?";

echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Campo,$IdOrden,$IdAuto,$IdTrabajador,$IdEstado,$Direccion,$IdCargo, 
$Tiempo, $Valor , $Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../Views/detallesDeOrden/detallesDeOrden.php'; 
    </script>";

}


    
}


