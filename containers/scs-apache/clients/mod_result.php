<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cliente</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Modificar cliente</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado de la modificación:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $idcliente = $_POST['idcliente'];
        $nombre = $_POST['nombre'];
        $localidad = $_POST['localidad'];
        $estado = $_POST['estado'];

        if($idcliente == 'todos'){
            echo "<div class='result'>";
            echo "<p>No ha elegido ningún cliente.</p>";
            echo "<a href='http://dashboard.local.scs/clients/mod_client.php'>Volver...</a>";
            echo "</div>";
            exit;
        }
        
        if ($estado == 'todos') {
            $estado = "Potencial";
        }

        echo "<div class='result'>";
        echo "<p>Cliente modificado</p>";
        echo "<a href='http://dashboard.local.scs/clients/mod_client.php'>Volver...</a>";
        echo "</div>";

        mysqli_query($conn,"UPDATE clients SET name = '".$nombre."', location = '".$localidad."', state = '".$estado."' WHERE id = ".$idcliente.";");
        
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>

