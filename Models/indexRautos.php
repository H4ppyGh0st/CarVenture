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
$Placa=$_POST['Placa'];
$Color=$_POST['Color'];
$Marca=$_POST['Marca'];
$Puertas=$_POST['Puertas'];
$IdDueño=$_POST['Dueño'];


#Estraer el nombre del dueño para dejar solo el ID
$newId = ""; 

    for($caracteres=0;  $caracteres < strlen($IdDueño); $caracteres++ ){

        if($IdDueño[$caracteres] == "-"){

            break; 
        }
        

        $newId = $newId.$IdDueño[$caracteres];

      
    }








if(isset($_POST['enviarAuto'])){

    $sql = "INSERT INTO autitos(Campo,Id,Placa,Color,Marca,NoPuertas,IdDueño) VALUES (?,?,?,?,?,?,?)";

    $comando= $conn->prepare($sql);

    
    
    if ($comando->execute([$Campo,$Id,$Placa,$Color,$Marca,$Puertas,$newId])){
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../Views/autos/registrarAuto.php';
    
        </script>";
    
    }
}



if(isset($_POST['borrarAuto'])){

    

 
    $sql = "DELETE from autitos where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../Views/autos/registrarAuto.php'; 
        </script>";
    
    }
    
}





if(isset($_POST['modificarAuto'])){

 #preparé la instrucción de guardado
$sql = "UPDATE autitos set Campo=?,Placa=?,Color=?,Marca=?,NoPuertas=?,IdDueño=? where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Campo,$Placa,$Color,$Marca,$Puertas,$newId,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../Views/autos/registrarAuto.php'; 
    </script>";

}


    
}






?>