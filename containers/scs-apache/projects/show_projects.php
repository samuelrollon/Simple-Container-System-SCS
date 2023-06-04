<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver proyectos</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Lista de proyectos</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            echo "<p>ℹ️ : Conexión establecida con éxito</p>";
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $query = mysqli_query($conn,"SELECT p.id, title, CONCAT(name,' ',lastname) AS project_lead, p.department, start_date, end_date, state, details
        FROM projects p, employees e
        WHERE state NOT IN ('Cerrado','Abandonado')
        AND e.id = p.project_lead;");
        echo "<p>Proyectos activos:</p>";
        echo "<table><th>ID</th><th>Titulo</th><th>Jefe de proyecto</th><th>Departamento</th><th>Fecha de inicio</th><th>Fecha de fin</th><th>Estado</th><th>Detalles</th>";
        while ($value = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['title']."</td>";
            echo "<td>".$value['project_lead']."</td>";
            echo "<td>".$value['department']."</td>";
            echo "<td>".$value['start_date']."</td>";
            echo "<td>".$value['end_date']."</td>";
            echo "<td>".$value['state']."</td>";
            echo "<td>".$value['details']."</td>";
        }
        echo "</table>";

        $query = mysqli_query($conn,"SELECT p.id, title, CONCAT(name,' ',lastname) AS project_lead, p.department, start_date, end_date, state, details
        FROM projects p, employees e
        WHERE state LIKE 'Cerrado'
        AND e.id = p.project_lead;");        echo "<p>Proyectos cerrados:</p>";
        echo "<table><th>ID</th><th>Titulo</th><th>Jefe de proyecto</th><th>Departamento</th><th>Fecha de inicio</th><th>Fecha de fin</th><th>Estado</th><th>Detalles</th>";
        while ($value = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['title']."</td>";
            echo "<td>".$value['project_lead']."</td>";
            echo "<td>".$value['department']."</td>";
            echo "<td>".$value['start_date']."</td>";
            echo "<td>".$value['end_date']."</td>";
            echo "<td>".$value['state']."</td>";
            echo "<td>".$value['details']."</td>";
        }
        echo "</table>";

        $query = mysqli_query($conn,"SELECT p.id, title, CONCAT(name,' ',lastname) AS project_lead, p.department, start_date, end_date, state, details
        FROM projects p, employees e
        WHERE state LIKE 'Abandonado'
        AND e.id = p.project_lead;");
        echo "<p>Proyectos abandonados:</p>";
        echo "<table><th>ID</th><th>Titulo</th><th>Jefe de proyecto</th><th>Departamento</th><th>Fecha de inicio</th><th>Fecha de fin</th><th>Estado</th><th>Detalles</th>";
        while ($value = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['title']."</td>";
            echo "<td>".$value['project_lead']."</td>";
            echo "<td>".$value['department']."</td>";
            echo "<td>".$value['start_date']."</td>";
            echo "<td>".$value['end_date']."</td>";
            echo "<td>".$value['state']."</td>";
            echo "<td>".$value['details']."</td>";
        }
        echo "</table>";
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>