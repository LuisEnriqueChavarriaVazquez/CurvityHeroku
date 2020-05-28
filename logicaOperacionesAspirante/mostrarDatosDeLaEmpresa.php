<?php

//include '../includes/db.php';



$queryIdEmpresa = "SELECT * FROM Puesto WHERE IDEmpresa = '$IDEmpresa'";
$result = mysqli_query($conn, $queryIdEmpresa);
$idDinamica;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if (is_null($row["IDEmpresa"])) {
            echo '[NULL]';
        } else {
            $idDinamica = $row['IDEmpresa'];
            include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php';
            print $row['Nombre'];
            include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php';
        }
    }
} else {
    return "No rows";
}
