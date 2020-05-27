<?php

$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";


if (isset($_POST['submit'])) {
    $contrasena_eliminar_empresa = $_POST["contrasena_eliminar_empresa"];
    $nombre_empresa_eliminar = $_POST["nombre_empresa_eliminar"];
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    $queryIdEmpresa = "SELECT IDEmpresa FROM Empresa WHERE Contra = '$contrasena_eliminar_empresa' AND Nombre = '$nombre_empresa_eliminar'";
    $result = mysqli_query($conn, $queryIdEmpresa);
    $idDinamicaEmpresaPrincipal; //Valor a comparar
    while ($row = $result->fetch_assoc()) {
        $idDinamicaEmpresaPrincipal = $row['IDEmpresa'];
    }
    
    $queryGetSede = "SELECT Nombre,NombreReclutador FROM Sede WHERE IDEmpresa = '$idDinamicaEmpresaPrincipal'";
    $resultGetSede = mysqli_query($conn, $queryGetSede);
    $sedesRelacionadasEmpresaNombre; //Valor a de la sede
    $sedesRelacionadasEmpresaNombreReclutador; //Valor a de la sede
    while ($rowGetSede = $resultGetSede->fetch_assoc()) {
        $sedesRelacionadasEmpresaNombre = $rowGetSede['Nombre'];
        $sedesRelacionadasEmpresaNombreReclutador = $rowGetSede['NombreReclutador'];
        echo $rowGetSede['Nombre'];
        echo $rowGetSede['NombreReclutador'];
    }
}


/*if (isset($_POST['submit'])) {
    $contrasena_sede_empresa = $_POST["contrasena_sede_empresa"];
    $nombre_empresa_sede = $_POST["nombre_empresa_sede"];

    //Con los formularios de seguridad obtenemos la ID de la empresa para comparar

    $queryDelete = "DELETE FROM Sedes WHERE IDEmpresa = '$idDinamicaEmpresaPrincipal' ORDER BY IDSede LIMIT 1";
}*/
