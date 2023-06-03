<!DOCTYPE html>
<html>

<head>
    <title>Estados</title>
    <link rel="stylesheet" href="../Styles/styles2.css">
</head>

<body>


    <form action="../../Models/indexTrabajador.php" method="POST">


        <?php


        include '../../conexion/conexion.php';
        if ($conn)


            $sql = $conn->prepare('SELECT Id,NombreT FROM cargos');
        $sql->execute();

        if (!$sql) {
            echo 'Error al ejecutar la consulta';
        } else {

        ?>



            <label for="Nombre">ID del trabajador a modificar</label>
            <input type="text" placeholder="Id" name="Id" id="Id" required autofocus title="Ids">
            <br>

            <label for="dueño">Cargo</label>

            <select name="Cargos" style="width: 295px;margin-top: 10px;
    margin-bottom: 15px;height: 45px;border-radius: 10px;" id="lang">





            <?php
            foreach ($sql as $row) {

                print
                    '<option name = "Cargos">' . $row['Id'] . " - " . $row['Nombre'] . '</option>';
            }
        }

            ?>



            </select>


            <label for="Nombre">Nombre Completo</label>
            <input type="text" placeholder="Nombre" name="Nombre" id="Nombre" required autofocus title="Nombre">
            <br>
            <label for="Celular">Celular</label>
            <input type="text" placeholder="Celular" name="Celular" id="celular" required autofocus title="celular">
            <br>
            <label for="Direccion">Direccion</label>
            <input type="text" placeholder="Direccion" name="Direccion" id="direccion" required autofocus title="Direccion">


            <label for="Campo">Campo</label>
            <textarea name="Campo" id="Campo" cols="37" rows="10" style="margin-bottom: 25px;">

</textarea>

            <br><br>



            <br>




            <div>

                <input type="submit" class="btn" name="modificarTrabajador" id="actualizar" value="Modificar" style="width: 80px;">

                <a href="../principal/index.html" style="background-color:  #5f0f68; color: aliceblue; padding-top: 5px; 
             padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;
             margin-right: 10px; margin-top: 25px; border-radius: 10px;">
                    <b>Volver Al inicio</b>
                </a>

            </div>







</body>

</html>