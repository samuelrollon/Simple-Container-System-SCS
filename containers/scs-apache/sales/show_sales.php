<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver ventas</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Lista de ventas</h1>
    </header>
    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            echo "<p>ℹ️ : Conexión establecida con éxito</p>";
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $query = mysqli_query($conn,"SELECT s.id, CONCAT(e.name,' ',e.lastname) seller, details, revenue, c.name
        FROM sales s, employees e, clients c
        WHERE s.seller_id = e.id
        AND c.id = s.client_id;");
        
        echo "<table><th>ID</th><th>Vendedor</th><th>Detalles</th><th>Ingresos</th><th>Cliente</th>";
        while ($value = mysqli_fetch_assoc($query)) {
            echo "<tr>";
            echo "<td>".$value['id']."</td>";
            echo "<td>".$value['seller']."</td>";
            echo "<td>".$value['details']."</td>";
            echo "<td>".$value['revenue']."</td>";
            echo "<td>".$value['name']."</td>";            
        }
        echo "</table>";

    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>