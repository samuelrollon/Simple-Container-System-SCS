<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar empleado</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Dar de baja empleado</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado de la baja:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $idempleado = $_POST['idempleado'];

        if ($idempleado == 'todos'){
            echo "<div class='result'>";
            echo "<p>No ha elegido ningún empleado.</p>";
            echo "<a href='http://dashboard.local.scs/employees/delete_employee.php'>Volver...</a>";
            echo "</div>";
        }else {
            echo "<div class='result'>";
            echo "<p>Empleado eliminado</p>";
            echo "<a href='http://dashboard.local.scs/employees/delete_employee.php'>Volver...</a>";
            echo "</div>";

            $query = "DELETE FROM employees WHERE id = ".$idempleado.";";
            $result = mysqli_query($conn,$query);
        }
        
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
