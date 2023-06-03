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
$Id=$_POST["Id"];




#Apartado Persona -------------------------------

if(isset($_POST['enviarEstado'])){

    $sql = "INSERT INTO estados(Nombre,Campo) VALUES (?,?)";

    $comando= $conn->prepare($sql);



    if ($comando->execute([$Nombre,$Campo])){
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../views/estados/estados.html';
    
        </script>";
    
    }
}



if(isset($_POST['borrarEstado'])){

    

    error_reporting(0);
    $sql = "DELETE from estados where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../views/estados/estados.html'; 
        </script>";
    
    }
    
}





if(isset($_POST['modificarEstado'])){

 #preparé la instrucción de guardado
$sql = "UPDATE estados set Nombre=? , Campo=? where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Nombre,$Campo,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../views/estados/estados.html'; 
    </script>";

}


    
}






?>