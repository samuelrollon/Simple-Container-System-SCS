<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo cliente</title>
    <link href="../../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Dar de alta clientes</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>

    <p>Elija los datos del cliente.</p>
    <?php
        echo "<form action='new_result.php' method='POST'>";
        echo "<label>Nombre: </label>";
        echo "<input type='text' name='nombre' required/><br>";
        echo "<label>Localidad: </label>";
        echo "<input type='text' name='localidad' required/><br>";
        echo "<label>Fecha de registro: </label>";
        echo "<input type='text' name='fecha_reg' placeholder='".date("Y-m-d")."'/><br>";
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