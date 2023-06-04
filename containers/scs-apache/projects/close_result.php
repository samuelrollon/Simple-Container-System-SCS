<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cerrar proyecto</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Cerrar proyecto</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado del cierre:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $id = $_POST['idproyecto'];

        if ($id == 'todos') {
            echo "<div class='result'>";
            echo "<p>Debe elegir un proyecto para cerrar.</p>";
            echo "<a href='http://dashboard.local.scs/projects/close_project.php'>Volver...</a>";
            echo "</div>";
        }

        $query = "UPDATE projects SET state = 'Cerrado' WHERE id = $id;";
        mysqli_query($conn,$query);

        echo "<div class='result'>";
            echo "<p>Proyecto cerrado.</p>";
            echo "<a href='http://dashboard.local.scs/projects/close_project.php'>Volver...</a>";
            echo "</div>";
        
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
