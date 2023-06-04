<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva venta</title>
    <link href="../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Nueva venta</h1>
    </header>


    <a href="http://dashboard.local.scs">Volver al inicio</a>
    <p>Resultado del nuevo proyecto:</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $idvendedor = $_POST['idvendedor'];
        $detalles = $_POST['detalles'];
        $ingreso = $_POST['ingreso'];
        $cliente = $_POST['cliente'];

        if ($idvendedor == 'todos'){
            echo "<div class='result'>";
            echo "<p>Debe introducir un vendedor</p>";
            echo "<a href='http://dashboard.local.scs/sales/new_sale.php'>Volver...</a>";
            echo "</div>";
            exit;
        }

        if ($cliente == 'todos'){
            echo "<div class='result'>";
            echo "<p>Debe introducir un cliente</p>";
            echo "<a href='http://dashboard.local.scs/sales/new_sale.php'>Volver...</a>";
            echo "</div>";
            exit;
        }

        $query = "INSERT INTO sales (seller_id,details,revenue,client_id)
        VALUES (".$idvendedor.",'".$detalles."',".$ingreso.",".$cliente.")";

        mysqli_query($conn,$query);

        echo "<div class='result'>";
        echo "<p>Detalles: </p>";
        echo "<p>".$detalles."</p>";
        echo "<p>".$ingreso."</p>";
        echo "</div>";
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>
