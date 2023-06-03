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
    

$sql = $conn->prepare('SELECT Id,NombreC FROM cargos');
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
    <td>Nombre</td>
</tr>

</thead>
    <?php
    foreach ($sql as $row) {

        print 
        "<tr>

        <td>".$row['Id'] .
        "</td><td>".$row['NombreC']."</td>".  
        
        "</tr>";
    
    }
    }
?>
</table>


    </div>

</body>
</html>