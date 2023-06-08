<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles/global.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="./images/logo3.png">
    <title>Home</title>
</head>
<body>
    <header>
        <h1>Welcome</h1>
    </header>
    <?php
    $conn = mysqli_connect('scs-mysql-cont.local.scs','root','debian','scs');
    $result = mysqli_query($conn,"SELECT * FROM testdb;");
    ?>
    <table>
        <th>ID</th>
        <th>Name</th>
        <th>Lastname</th>
        <th>Date</th>
    <?php
    while ($value = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>$value[id]</td>";
        echo "<td>$value[name]</td>";
        echo "<td>$value[lastname]</td>";
        echo "<td>$value[reg_date]</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
<footer>
<span>Powered by Simple Container System</span>
</footer>
</html>