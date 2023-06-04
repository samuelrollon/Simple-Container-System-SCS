<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva venta</title>
    <link href="../../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Nueva venta</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>

    <p>Introduzca los datos de la venta.</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        echo "<form action='new_result.php' method='POST'>";
        echo "<select name='idvendedor'>";
        echo "<option value='todos' SELECTED>Seleccionar vendedor...</option>";
        $result = mysqli_query($conn,"SELECT id, name, lastname FROM employees WHERE department = 'Ventas';");
        while ($value = mysqli_fetch_assoc($result)) {
            echo "<option value='".$value['id']."'>".$value['name']." ".$value['lastname']."</option>";
        }
        echo "</select><br><br>";
        echo "<textarea name='detalles' placeholder='Detalles...'>";
        echo "</textarea><br>";
        echo "<label>Ingreso: </label>";
        echo "<input type='text' name='ingreso' placeholder='00.00'><br>";
        echo "<select name='cliente'>";
        echo "<option value='todos'>Seleccionar cliente...</option>";
        $result = $result = mysqli_query($conn,"SELECT id, name FROM clients;");
        while ($value = mysqli_fetch_assoc($result)) {
            echo "<option value='".$value['id']."'>".$value['name']."</option>";
        }
        echo "</select><br>";
        echo "<input type='submit' value='Enviar'>";
        echo "</form>";

    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>