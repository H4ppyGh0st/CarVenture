<?php
#include 'menu.html';
include '../conexion/conexion.php';

/* Este archivo se utilizará para generalizar todas las funciones del crud en un solo formulario

*/ 


/*
Elimina los warnings:

*/






$Nombre=$_POST['Nombre'];
$Id=$_POST["Id"];





if(isset($_POST['enviarCargo'])){

    $sql = "INSERT INTO cargos(NombreC) VALUES (?)";

    $comando= $conn->prepare($sql);



    
    if ($comando->execute([$Nombre])){
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../views/cargos/cargos.html';
    
        </script>";
    
    }
}



if(isset($_POST['borrarCargo'])){

    

    error_reporting(0);
    $sql = "DELETE from cargos where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../views/cargos/cargos.html'; 
        </script>";
    
    }
    
}





if(isset($_POST['modificarCargo'])){

 #preparé la instrucción de guardado
$sql = "UPDATE cargos set NombreC=? where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Nombre,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../views/cargos/cargos.html'; 
    </script>";

}


    
}






?>