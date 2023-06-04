<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar proyecto</title>
    <link href="../../styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../images/logo3.png">
</head>
<body>
    <header>
        <h1>Modificar proyecto</h1>
    </header>

    <a href="http://dashboard.local.scs">Volver al inicio</a>

    <p>Selecione el proyecto e introduzca los datos.</p>
    <?php
        $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
        
        
        if ($conn){
            //OK
        }else {
            echo "<p>No se pudo establecer conexión con la base de datos. Asegúrese de que el contenedor de la base de datos esté corriendo.</p>";
        }

        $result = mysqli_query($conn,"SELECT * FROM projects;");
        echo "<form action='mod_result.php' method='POST'>";
        echo "<select name='idproyecto'>";
        echo "<option value='todos'>Selecionar proyecto...</option>";
        while ($value = mysqli_fetch_assoc($result)) {
            echo "<option value='".$value['id']."'>".$value['title']."</option>";
        }
        echo "</select><br>";
        
        $result = mysqli_query($conn,"SELECT * FROM employees;");
        echo "<label>Nuevo titulo: </label>";
        echo "<input type='text' name='titulo' required/><br>";
        echo "<select name='lider'>";
        echo "<option value='todos' SELECTED>Seleccionar jefe de proyecto</option>";
        while ($value = mysqli_fetch_assoc($result)) {
            echo "<option value='".$value['id']."'>".$value['name']." ".$value['lastname']."</option>";
        }
        echo "</select><br>";

        $result = mysqli_query($conn,"SELECT * FROM projects;");
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
        echo "<label>Fecha de inicio: </label>";
        echo "<input type='text' name='fecha_inicio' placeholder='".date("Y-m-d")."'/><br>";
        echo "<label>Fecha de fin: </label>";
        echo "<input type='text' name='fecha_fin' placeholder='".date("Y-m-d")."'/><br>";
        echo "<select name='estado'>";
        echo "<option value='todos' SELECTED>Seleccionar estado...</option>";
        echo "<option value='En progreso'>En progreso</option>";
        echo "<option value='Parado'>Parado</option>";
        echo "<option value='Cerrado'>Cerrado</option>";
        echo "<option value='Abandonado'>Abandonado</option>";
        echo "<option value='Pendiente'>Pendiente</option>";
        echo "</select><br><br>";
        echo "<label>Detalles</label><br>";
        echo "<textarea name='detalles' placeholder='Detalles...'>";
        echo "</textarea><br>";
        echo "<input type='submit' value='Enviar'/>";
        echo "</form>";
    ?>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>