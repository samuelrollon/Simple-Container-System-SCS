<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/logo3.png">
    <title>Inicio</title>
</head>
<body>
    <header>
        <h1>Bienvenido a la página principal</h1>
    </header>
    <p>Elija qué desea hacer:</p>
    <div style="display: flex;" class="main_cont">
        <div>
            <a href="./employees/show_employees.php"><h3>Ver lista de empleados</h3></a>
        </div>
        <div>
            <a href="./employees/new_employee.php"><h3>Dar de alta empleados</h3></a>   
        </div>
        <div>
            <a href="./employees/mod_employee.php"><h3>Modificar empleados</h3></a>
        </div>
        <div>
            <a href="./employees/delete_employee.php"><h3>Dar de baja empleados</h3></a>
        </div>
    </div>
    <div style="display: flex;" class="main_cont">
        <div>
            <a href="./projects/show_projects.php"><h3>Ver lista de proyectos</h3></a>
        </div>
        <div>
            <a href="./projects/new_project.php"><h3>Crear nuevo proyecto</h3></a>   
        </div>
        <div>
            <a href="./projects/mod_project.php"><h3>Modificar proyectos</h3></a>
        </div>
        <div>
            <a href="./projects/close_project.php"><h3>Cerrar proyectos</h3></a>
        </div>
    </div>
    <div style="display: flex;" class="main_cont">
        <div>
            <a href="./clients/show_clients.php"><h3>Ver lista de clientes</h3></a>
        </div>
        <div>
            <a href="./clients/new_client.php"><h3>Registrar un nuevo cliente</h3></a>   
        </div>
        <div>
            <a href="./clients/mod_client.php"><h3>Modificar cliente</h3></a>
        </div>
        <div>
            <a href="./clients/delete_client.php"><h3>Eliminar cliente</h3></a>
        </div>
    </div>
    <div style="display: flex;" class="main_cont">
        <div>
            <a href="./sales/show_sales.php"><h3>Ver lista de ventas</h3></a>
        </div>
        <div>
            <a href="./sales/new_sale.php"><h3>Registrar nueva venta</h3></a>   
        </div>
    </div>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>