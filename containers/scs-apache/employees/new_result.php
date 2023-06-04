<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo empleado</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Dar de alta empleado</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado del alta:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $nombre = $_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $departamento = $_POST['departamento'];
        $fecha_reg = $_POST['fecha_reg'];

        
        if ($departamento == 'todos') {
            $departamento = "NoDefinido";
        }
        if (empty($fecha_reg)) {
            $fecha_reg = date("Y-m-d");
        }
        
        echo "<div class='result'>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Apellidos: $apellidos</p>";
        echo "<p>Departamento: $departamento</p>";
        echo "<p>Fecha de alta: $fecha_reg</p>";
        echo "</div>";

        $query = "INSERT INTO employees (name, lastname,department,reg_date) VALUES ('".$nombre."','".$apellidos."','".$departamento."','".$fecha_reg."');";

        $result = mysqli_query($conn,$query);

        
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
