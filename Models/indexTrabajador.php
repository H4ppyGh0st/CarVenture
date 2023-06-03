<?php
#include 'menu.html';
include '../conexion/conexion.php';

/* Este archivo se utilizará para generalizar todas las funciones del crud en un solo formulario

*/ 


/*
Elimina los warnings:

*/





$Campo=$_POST['Campo'];
$Nombre=$_POST['Nombre'];
$Celular=$_POST['Celular'];
$Id=$_POST["Id"];
$Direccion=$_POST['Direccion'];
$Cargos=$_POST['Cargos'];

$newId = ""; 

    for($caracteres=0;  $caracteres < strlen($Cargos); $caracteres++ ){


        if($Cargos[$caracteres] == "-"){

   

            break; 
        }

        $newId = $newId.$Cargos[$caracteres];

        

        
    }








if(isset($_POST['enviarTrabajador'])){

    $sql = "INSERT INTO trabajador(Campo,NombreT,Celular,Direccion,IdCargo) VALUES (?,?,?,?,?)";

    $comando= $conn->prepare($sql);



    
    if ($comando->execute([$Campo,$Nombre,$Celular,$Direccion,$newId])){
        
        

        echo "<script> alert('El dato ha sido insertado');

        window.location = '../Views/trabajador/formulariot.php';
    
        </script>";
    
    }
}



if(isset($_POST['borrarTrabajador'])){

    

    error_reporting(0);
    $sql = "DELETE from trabajador where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../Views/trabajador/formulariot.php';
        </script>";
    
    }
    
}




if(isset($_POST['modificarTrabajador'])){

 #preparé la instrucción de guardado
$sql = "UPDATE trabajador set Campo = ?,NombreT = ?,Celular = ?,Direccion= ?,IdCargo=? where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Campo,$Nombre,$Celular,$Direccion,$newId,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../Views/trabajador/formulariot.php';
    </script>";

}


    
}






?>