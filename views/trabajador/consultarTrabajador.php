<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Styles/styles2.css">
</head>
<body>
<?php


include '../../conexion/conexion.php';
if ($conn)
    

$sql = $conn->prepare('SELECT Id,Campo,NombreT,Celular,Direccion,IdCargo FROM trabajador');
$sql->execute();

if (!$sql){
    echo 'Error al ejecutar la consulta';
    }else{
    ?>




<div class="contTabla" >


    <table  class="content-table" >

<thead>
<tr> 
    
    <td>Id</td>
    <td>Campo</td>
    <td>Nombre</td>
    <td>Celular</td>
    <td>Direccion</td>
    <td>ID Cargo</td>

</tr>

</thead>
    <?php
    foreach ($sql as $row) {

        print 
        "<tr>

        <td>".$row['Id']."</td>".
        "<td>".$row['Campo']."</td>".  
        "<td>".$row['NombreT']."</td>".
        "<td>".$row['Celular']."</td>".   
        "<td>".$row['Direccion']."</td>". 
        "<td>".$row['IdCargo']."</td>".  

        "</tr>";
    
    }
    }
?>
</table>


    </div>

</body>
</html>