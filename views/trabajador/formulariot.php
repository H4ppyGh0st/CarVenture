<html>
<head>
	<title>Personas</title>
    <link rel="stylesheet" href="../Styles/styles2.css">
</head>
<body>
 

		  


       
    <?php


    include '../../conexion/conexion.php';
    if ($conn)


    $sql = $conn->prepare('SELECT Id,NombreC FROM cargos');
    $sql->execute();

    if (!$sql) {
        echo 'Error al ejecutar la consulta';
    } else {

    ?>



        

        <form action="../../Models/indexTrabajador.php" method="POST">

        <label for="dueño">Cargo</label>

            <select name="Cargos" style="width: 295px;margin-top: 10px;
        margin-bottom: 15px;height: 45px;border-radius: 10px;" id="lang">





            <?php
            foreach ($sql as $row) {

                print
                    '<option name = "Cargos">' . $row['Id'] . " - " . $row['NombreC'] . '</option>';
            }
        }

            ?>



            </select>

      
		  <label for="Nombre">Nombre Completo</label>  
		<input type="text" placeholder="Nombre" name="Nombre" 
        id="Nombre" required autofocus title="Nombre">
         <br>
         <label for="Celular">Celular</label>  
        <input type="text" placeholder="Celular" name="Celular" 
        id="celular" required autofocus title="celular">
         <br>
         <label for="Direccion">Direccion</label>  
        <input type="text" placeholder="Direccion" name="Direccion" 
        id="direccion" required autofocus title="Direccion">


        <label for="Campo">Campo</label>
        <textarea name="Campo" id="Campo" cols="37" rows="10" style="margin-bottom: 25px;">
    
    </textarea>
        
        <br><br>
        

        
        <br>


        <div>

            <!--<input type="submit" class="btn" name="actualizar" id="actualizar" value="Modificar">-->


            <a href="modificart.php" style="background-color:  #007bff; color: aliceblue; padding-top: 5px; 
   padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;
   margin-right: 10px;">
                <b>modificar</b></a>



            <input type="submit" name="enviarTrabajador" id="enviar" value="Enviar">



            <!--  <input type="reset" name="Borrar" id="borrar" value="Borrar"> -->


            <a href="borrart.html" style="background-color: red; color: aliceblue; padding-top: 5px; 
    padding-bottom: 5px; padding-left: 5px; padding-right: 5px; text-decoration: none;">
                <b>Borrar</b></a>


            <a href="consultarTrabajador.php" style="background-color: rgb(255, 213, 0); color: aliceblue; padding-top: 5px; 
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