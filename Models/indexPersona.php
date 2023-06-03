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
$Estrato=$_POST['Estrato'];





if(isset($_POST['enviarPersona'])){

    $sql = "INSERT INTO persona(Campo,Nombre,Celular,Direccion,Estrato) VALUES (?,?,?,?,?)";

    $comando= $conn->prepare($sql);



    
    if ($comando->execute([$Campo,$Nombre,$Celular,$Direccion,$Estrato])){
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../views/persona/formulariop.html';
    
        </script>";
    
    }
}



if(isset($_POST['borrarPersona'])){

    

    error_reporting(0);
    $sql = "DELETE from persona where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../views/persona/formulariop.html'; 
        </script>";
    
    }
    
}




if(isset($_POST['modificarPersona'])){

 #preparé la instrucción de guardado
$sql = "UPDATE persona set Campo=?,Nombre=?,Celular=?,Direccion=?,Estrato=? where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Campo,$Nombre,$Celular,$Direccion,$Estrato,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../views/persona/formulariop.html'; 
    </script>";

}


    
}






?>