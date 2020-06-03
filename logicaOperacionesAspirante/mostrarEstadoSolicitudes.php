<?php

    if (
        isset($_GET["nombreSolicitud"])
    ) {
        $nombreSolicitud = $_GET["nombreSolicitud"];
    }

    $servername = "localhost";
    $username = "u253306330_curvity";
    $password = "curvity";
    $dbname = "u253306330_curvity";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }


    $queryDatosAspirante = "SELECT * FROM Aspirante WHERE CorreoElec = '$nombreSolicitud'";
    $resultadoAspiranteDatos = mysqli_query($conn, $queryDatosAspirante);
    $IDAspirante;
    while ($rowAspirante = $resultadoAspiranteDatos->fetch_assoc()) {
        $IDAspirante = $rowAspirante['IDAspirante'];
    }

    $queryDatosMatching = "SELECT * FROM Matching WHERE IDAspirante = '$IDAspirante'";
    $resultadosDelMatching = mysqli_query($conn, $queryDatosMatching);
    $Situacion = array();
    $IDPuesto = array();
    while ($rowMatching = $resultadosDelMatching->fetch_assoc()) {
        array_push($Situacion,$rowMatching['Situacion']);
        array_push($IDPuesto,$rowMatching['IDPuesto']);
    }


    //echo $Situacion[0] . $IDPuesto[0] . $Situacion[1] . $IDPuesto[1];
    
    for($i = 0; $i < sizeof($Situacion); $i++){
        $queryDatosPuestos = "SELECT * FROM Puesto WHERE IDPuesto = '$IDPuesto[$i]'";
        $resultadoPuesto = mysqli_query($conn, $queryDatosPuestos);
        $NombrePuesto = array();
        while ($rowPuesto = $resultadoPuesto->fetch_assoc()) {
            array_push($NombrePuesto,$rowPuesto['Nombre']);
        }

        if($Situacion[$i] == "Aceptado" ){
            print "
            <div class='stateCard row z-depth-4'>
            <div class='col s12 stateTextContainer stateText truncate'>".$NombrePuesto[0]."</div>
            <div class='col s12 stateResult' style='font-size: 10px !important; border-radius: 0px'>"."Revisa datos de contacto en donde se publicó la oferta."."</div>
            <div class='col s12 stateResult'>".$Situacion[$i]."</div>
            </div>
            ";
        }else if($NombrePuesto[0] != ''){
            print "
            <div class='stateCard row z-depth-4'>
            <div class='col s12 stateTextContainer stateText truncate'>".$NombrePuesto[0]."</div>
            
            <div class='col s12 stateResult'>".$Situacion[$i]."</div>
            </div>
            ";
        }
    }

    if(empty($Situacion)){
        print "
        <div style='width:100%; display:flex; justify-content:center; align-items:center; flex-direction: column;'>
        <div><h4 style='font-weight:900;'>Sin ofertas enviadas.</h4></div> <br><br> 
        <div style='padding: 40px;'><img src='pictures/sinOfertasEnviadas.png' width='100%'></div></div>
        ";
    }
    
    


    /*$queryDatosPuesto = "SELECT * FROM Puesto WHERE IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa'";
    $resultPuesto = mysqli_query($conn, $queryDatosPuesto);
    $nombrePuesto;
    $IDPuesto;
    while ($rowPuesto = $resultPuesto->fetch_assoc()) {
        $nombrePuesto = $rowPuesto['Nombre'];
        $IDPuesto = $rowPuesto['IDPuesto'];

        print "<form action='paginaSwipe.php' method='GET'><a name='submit' 
        href='./paginaSwipe.php?IDSede=$IDSede&IDEmpresa=$IDEmpresa&IDPuesto=$IDPuesto'>";
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php';
        echo $nombrePuesto;
        include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php';
        print "</a></form>";
    }*/

//Recabar los datos de aspirantes
/*$queryDatosMatching = "SELECT * FROM Matching WHERE IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND IDPuesto = '$IDPuesto'";
$resultMatching = mysqli_query($conn, $queryDatosMatching);
if ($resultMatching = $conn->query($queryDatosMatching)) {
    $IDAspiranteSelecto;
    $Ids = array();
    while ($rowAspirantesSelectos = $resultMatching->fetch_assoc()) {
        $IDAspiranteSelecto = $rowAspirantesSelectos['IDAspirante'];
        array_push($Ids,$rowAspirantesSelectos['IDAspirante']);
        echo "perro";
    }
}*/