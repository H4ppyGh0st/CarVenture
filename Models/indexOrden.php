<?php
#include 'menu.html';
include '../conexion/conexion.php';

/* Este archivo se utilizará para generalizar todas las funciones del crud en un solo formulario

*/ 


/*
Elimina los warnings:

*/





$Id=$_POST["Id"];
$Descripcion=$_POST['Descripcion'];
$Fecha=$_POST['Fecha'];





if(isset($_POST['enviarOrden'])){

    $sql = "INSERT INTO ordendetrabajo (Descripcion, Fecha) VALUES (?,?)";

    $comando= $conn->prepare($sql);

    
    
    if ($comando->execute([$Descripcion,$Fecha])){
        
        

        echo "<script> alert('El dato ha sido insertado');
        window.location = '../Views/orden/orden.html';
    
        </script>";
    
    }
}



if(isset($_POST['borrarOrden'])){

    

 
    $sql = "DELETE from ordendetrabajo where Id=?";
    echo $sql;
    $comando= $conn->prepare($sql);

    if ($comando->execute([$Id])){
    
        echo "<script> alert('El dato ha sido borrado');
        window.location = '../Views/orden/orden.html'; 
        </script>";
    
    }
    
}





if(isset($_POST['modificarOrden'])){

 #preparé la instrucción de guardado
$sql = "UPDATE ordendetrabajo set Descripcion=?, Fecha=?  where Id=?";
echo $sql;
$comando= $conn->prepare($sql);
if ($comando->execute([$Descripcion, $Fecha ,$Id])){

    echo "<script> alert('El dato ha sido actualizado');
    window.location = '../Views/orden/orden.html'; 
    </script>";

}


    
}






?>