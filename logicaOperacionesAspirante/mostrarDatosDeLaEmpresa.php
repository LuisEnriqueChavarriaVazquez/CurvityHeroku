<?php

//include '../includes/db.php';



$queryIdEmpresa = "SELECT * FROM Puesto WHERE IDEmpresa = '$IDEmpresa'";
$result = mysqli_query($conn, $queryIdEmpresa);
$idDinamica;
$i = 1;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $idDinamica = $row['IDEmpresa'];
        print "<form method='GET' action='vistaEnvioSolicitud.php'>
            <a name='submit' 
              href='./vistaEnvioSolicitud.php?Nombre=" . $row['Nombre'] .
            "&PagoOfertado=" . $row['PagoOfertado'] .
            "&ModalidadPago=" . $row['ModalidadPago'] .
            "&ResumenRequisitos=" . $row['ResumenRequisitos'] .
            "&ResumenPrestaciones=" . $row['ResumenPrestaciones'] .
            "&IDPuesto=" . $row['IDPuesto'] .
            "'>";
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php';
        print $row['Nombre'];
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php';
        print "</a></form>";
    }
} else {
    echo "<div style='width:100%; display:flex; justify-content:center; align-items:center; flex-direction: column;'>
    <div><h5 style='font-weight:900;' class='blue-grey-text'>Sin ofertas :(</h5></div></div>";
}
