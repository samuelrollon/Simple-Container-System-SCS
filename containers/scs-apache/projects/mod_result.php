<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar proyecto</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Modificar proyecto</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado de la modificacion:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $idproyecto = $_POST['idproyecto'];
        $titulo = $_POST['titulo'];
        $lider = $_POST['lider'];
        $departamento = $_POST['departamento'];
        $fecha_inicio = $_POST['fecha_inicio'];
        $fecha_fin = $_POST['fecha_fin'];
        $estado = $_POST['estado'];
        $detalles = $_POST['detalles'];

        
        if ($lider == 'todos') {
            echo "<div class='result'>";
            echo "<p>Debe introducir un jefe de proyecto</p>";
            echo "<a href='http://dashboard.local.scs/projects/mod_project.php'>Volver...</a>";
            echo "</div>";
            exit;
        }
        if ($departamento == 'todos') {
            $departamento = 'NoDefinido';
        }
        if (empty($fecha_inicio)) {
            $fecha_inicio = date("Y-m-d");
        }
        if (empty($fecha_fin)) {
            $fecha_fin = date("Y-m-d");
        }

        if ($estado == 'todos'){
            $estado = 'Pendiente';
        }
        
        $result = mysqli_query($conn,"SELECT * FROM employees WHERE id = ".$lider.";");

        echo "<div class='result'>";
        echo "<p>Titulo: $titulo</p>";
        echo "<p>Jefe de proyecto: ";
        while ($value = mysqli_fetch_assoc($result)) {
            echo $value['name']." ".$value['lastname'];
        }
        echo "</p>";
        echo "</p>";
        echo "<p>Departamento: $departamento</p>";
        echo "<p>Fecha inicio: $fecha_inicio</p>";
        echo "<p>Fecha fin: $fecha_fin</p>";
        echo "<p>Estado: $estado</p>";
        echo "<p>Detalles: $detalles</p>";
        echo "</div>";

        $query = "UPDATE projects SET title = '".$titulo."',project_lead = ".$lider.", department = '".$departamento."',start_date = '".$fecha_inicio."',end_date = '".$fecha_fin."',state = '".$estado."',details = '".$detalles."' WHERE id = ".$idproyecto.";";

        mysqli_query($conn,$query);
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
