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
    

$sql = $conn->prepare('SELECT Campo,Id,Placa,Color,Marca,NoPuertas,IdDueño FROM autitos');
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
    <td>Placa</td>
    <td>Color</td>
    <td>Marca</td>
    <td>Puertas</td>
    <td>ID Dueño</td>





</tr>

</thead>
    <?php
    foreach ($sql as $row) {

        print 
        "<tr>

        <td>".$row['Campo']."</td>".
        "<td>".$row['Id']."</td>".  
        "<td>".$row['Placa']."</td>".
        "<td>".$row['Color']."</td>".   
        "<td>".$row['Marca']."</td>". 
        "<td>".$row['NoPuertas']."</td>".  
        "<td>".$row['IdDueño']."</td>".    
        
        "</tr>";
    
    }
    }
?>
</table>


    </div>

</body>
</html>