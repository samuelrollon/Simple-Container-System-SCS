<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar empleado</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Modificar empleado</h1>
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

        $empleado = $_POST['empleado'];
        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $departamento = $_POST['departamento'];

        if($empleado == 'todos'){
            echo "<div class='result'>";
            echo "<p>No ha elegido ningún empleado.</p>";
            echo "<a href='http://dashboard.local.scs/employees/mod_employee.php'>Volver...</a>";
            echo "</div>";
            exit;
        }
        
        if ($departamento == 'todos') {
            $departamento = "NoDefinido";
        }

        echo "<div class='result'>";
        echo "<p>Empleado modificado</p>";
        echo "<a href='http://dashboard.local.scs/employees/mod_employee.php'>Volver...</a>";
        echo "</div>";

        mysqli_query($conn,"UPDATE employees SET name = '".$nombre."', lastname = '".$apellidos."', department = '".$departamento."' WHERE id = ".$empleado.";");
        
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
