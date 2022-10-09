<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>My First Web Page</title>
</head>
<body>
  
<?php

$servername = "db4free.net"; // Nombre/IP del servidor
$database = "dbunity"; // Nombre de la BBDD
$username = "flaviourdiales"; // Nombre del usuario
$password = "flaviolp12"; // Contraseña del usuario
// Creamos la conexión
$con = mysqli_connect($servername, $username, $password, $database);

    $query = "SELECT * FROM top10 ORDER BY score DESC";
    $result = mysqli_query($con, $query);
    $scores = array();
    while($row = mysqli_fetch_assoc($result)){
        $scores[] = $row;
    }
    echo json_encode($scores);
    mysqli_close($con);



?>


</body>

</html>

