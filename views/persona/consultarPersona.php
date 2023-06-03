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
    

$sql = $conn->prepare('SELECT Campo,Id,Nombre,Celular,Direccion,Estrato FROM persona');
$sql->execute();

if (!$sql){
    echo 'Error al ejecutar la consulta';
    }else{
    ?>




<div class="contTabla" >


    <table  class="content-table" >

<thead>
<tr>
    <td>Campo</td>
    <td>Id</td>
    <td>Nombre</td>
    <td>Celuar</td>
    <td>Direccion</td>
    <td>Estrato</td>
    
    
</tr>

</thead>
    <?php
    foreach ($sql as $row) {

        print 
        "<tr>

        <td>".$row['Campo'] .
        "</td><td>".$row['Id'] 
        ."</td><td> ".$row['Nombre'] 
        . "</td><td>".$row['Celular'].
        "</td><td>".$row['Direccion'].
        "</td><td>".$row['Estrato']."</td>  
        
        </tr>";
    
    }
    }
?>
</table>


    </div>

</body>
</html>