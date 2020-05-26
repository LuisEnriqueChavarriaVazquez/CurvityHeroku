<?php
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$salida = "";

$query = "SELECT * FROM Empresa ORDER By IDEmpresa";

if($resultado = $conn->query($query)){
    while($fila = $resultado->fetch_row()){
        printf("%s (%s)\n", $fila[0], $fila[1]);
    }
}

if ($resultado = $conn->query($query)) {
    while ($fila = $resultado->fetch_assoc()) {
        printf ("%s (%s)\n", $fila["Nombre"], $fila["IDEmpresa"]);
    }
    $resultado->free();
}

$resultado->close();