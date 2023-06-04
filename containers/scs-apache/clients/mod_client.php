<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar cliente</title>
    <link href="../../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Modificar clientes</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>

    <p>Elija los nuevos del cliente.</p>
    <?php

        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $result = mysqli_query($conn,"SELECT id, name FROM clients;");


        echo "<form action='mod_result.php' method='POST'>";
        echo "<select name='idcliente'>";
        echo "<option value='todos' SELECTED>Seleccionar cliente</option>";
        while ($value = mysqli_fetch_assoc($result)) {
            echo "<option value='".$value['id']."'>".$value['name']."</option>";
        }
        echo "</select><br>";
        echo "<label>Nombre: </label>";
        echo "<input type='text' name='nombre' required/><br>";
        echo "<label>Localidad: </label>";
        echo "<input type='text' name='localidad' required/><br>";
        echo "<select name='estado'>";
        echo "<option value='todos' SELECTED>Seleccionar estado...</option>";
        echo "<option value='Activo'>Activo</option>";
        echo "<option value='Inactivo'>Inactivo</option>";
        echo "<option value='Perdido'>Inactivo</option>";
        echo "<option value='Potencial'>Potencial</option>";
        echo "</select><br>";
        echo "<input type='submit' value='Enviar'/>";
        echo "</form>";
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>