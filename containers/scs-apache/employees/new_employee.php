<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo empleado</title>
    <link href="../../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Dar de alta empleado</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>

    <p>Elija los datos del empleado.</p>
    <?php
        echo "<form action='new_result.php' method='POST'>";
        echo "<label>Nombre: </label>";
        echo "<input type='text' name='nombre' required/><br>";
        echo "<label>Apellidos: </label>";
        echo "<input type='text' name='apellidos' required/><br>";
        echo "<select name='departamento'>";
        echo "<option value='todos' SELECTED>Seleccionar departamento...</option>";
        echo "<option value='Direccion'>Dirección</option>";
        echo "<option value='Marketing'>Marketing</option>";
        echo "<option value='IT'>IT</option>";
        echo "<option value='RRHH'>RRHH</option>";
        echo "<option value='Ventas'>Ventas</option>";
        echo "<option value='AttCliente'>AttCliente</option>";
        echo "<option value='NoDefinido'>NoDefinido</option>";
        echo "</select><br>";
        echo "<input type='text' name='fecha_reg' placeholder='".date("Y-m-d")."'/><br>";
        echo "<input type='submit' value='Enviar'/>";
        echo "</form>";
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>