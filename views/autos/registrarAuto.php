<!DOCTYPE html>
<html>

<head>
    <title>Registrar Auto</title>
    <link rel="stylesheet" href="../Styles/styles2.css">
</head>

<body>


    <?php


    include '../../conexion/conexion.php';
    if ($conn)


        $sql = $conn->prepare('SELECT Id,Nombre FROM persona');
    $sql->execute();

    if (!$sql) {
        echo 'Error al ejecutar la consulta';
    } else {

    ?>



        

        <form action="../../Models/indexRautos.php" method="POST">

        <label for="dueño">Dueño</label>

            <select name="Dueño" style="width: 295px;margin-top: 10px;
        margin-bottom: 15px;height: 45px;border-radius: 10px;" id="lang">





            <?php
            foreach ($sql as $row) {

                print
                    '<option name = "Dueño">' . $row['Id'] . " - " . $row['Nombre'] . '</option>';
            }
        }

            ?>



            </select>


                <label for="direccion">Placa</label>
                <input type="text" placeholder="Placa" name="Placa" id="Direccion" required autofocus title="Placa">
                <br>
                <label for="estrato">Marca</label>
                <input type="text" placeholder="Marca" name="Marca" id="Marca" required autofocus title="Marca">
                <br>

                <label for="Campo">Color</label>

                <input type="text" placeholder="Color" name="Color" id="Color" required autofocus title="Color">
                <br>

                <label for="puertas">Numero de puertas</label>
                <input type="number" placeholder="Puertas" name="Puertas" id="Puertas" required autofocus title="Puertas">
                <br>

                <label for="Campo" style="margin-top: 25px;">Campo</label>
                <textarea name="Campo" id="Campo" cols="37" rows="10" style="margin-bottom: 25px;">

        </textarea>

                <br>


                <!--<input type="text" placeholder="Campo" name="Campo" id="Campo" required autofocus title="Nombre">
        -->





                <div>

                    <!--<input type="submit" class="btn" name="actualizar" id="actualizar" value="Modificar">-->


                    <a href="modificara.php" style="background-color:  #007bff; color: aliceblue; padding-top: 5px; 
           padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;
           margin-right: 10px;">
                        <b>modificar</b></a>



                    <input type="submit" name="enviarAuto" id="enviar" value="Enviar">



                    <!--  <input type="reset" name="Borrar" id="borrar" value="Borrar"> -->


                    <a href="borrara.html" style="background-color: red; color: aliceblue; padding-top: 5px; 
            padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;">
                        <b>Borrar</b></a>


                    <a href="consultarAutos.php" style="background-color: rgb(255, 213, 0); color: aliceblue; padding-top: 5px; 
            padding-bottom: 5px; padding-left: 12px; padding-right: 12px; text-decoration: none; 
            margin-left: 10px;">
                        <b>leer</b></a>

                </div>

                <div style="display:flex; justify-content: center;">

                    <a href="../principal/index.html" style="background-color:  #5f0f68; color: aliceblue; padding-top: 5px; 
             padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;
             margin-right: 10px; margin-top: 25px; border-radius: 10px;">
                        <b>Volver Al inicio</b>
                    </a>
                </div>








</body>

</html>