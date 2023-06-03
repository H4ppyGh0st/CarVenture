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
    

$sql = $conn->prepare('SELECT Id, Descripcion, Fecha FROM ordendetrabajo');
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
    <td>Descripcion</td>
    <td>Fecha</td>    
    
</tr>

</thead>
    <?php
    foreach ($sql as $row) {

        print 
        "<tr>

        <td>".$row['Id'] .
        "</td><td>".$row['Descripcion'] 
        ."</td><td> ".$row['Fecha'].
        "</td>".
        
        "</tr>";
    
    }
    }
?>
</table>


    </div>

</body>
</html>