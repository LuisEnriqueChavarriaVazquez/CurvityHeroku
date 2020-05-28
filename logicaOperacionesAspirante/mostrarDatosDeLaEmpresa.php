<?php

//include '../includes/db.php';

//No se cargan aun los datos de las sedes
//Se establece la conexión a la base de datos.
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
        
$queryIdEmpresa = "SELECT * FROM Puesto WHERE IDEmpresa = '$IDEmpresa'";
$result = mysqli_query($conn,$queryIdEmpresa);
$idDinamica;

while ($row = $result->fetch_assoc()) {
    $idDinamica = $row['IDEmpresa'];
    $fotoLogo = $row['FotoLogo'];
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php';
        print $row['Nombre'];
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php';
    
}

?>
