<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>


<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarSuperior.php' ?>
ofertasPublicadasPrevioSwipe.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInferior.php' ?>

<!-- ////////////////////////////////////////////////////////////////////////////////////////////////////////////////En esta seccion comienza el slider para marcas de codigos de FALLA OBDII-->

<!-- Set up your HTML -->
<div class="alturaAdaptable SWIPECAROUSEL contank light-blue darken-4">

    <?php include("logicaOperacionesReclutador/mostrarDatosSwipe.php");?>
</div>


<?php
function aceptar($conn, $IDAspiranteSelecto,$IDSede,$IDPuesto,$IDEmpresa)
{
    $valorSituacion = "Aceptado";
    $queryAceptado = "UPDATE Matching SET Situacion='$valorSituacion' WHERE IDAspirante = '$IDAspiranteSelecto' AND IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND IDPuesto = '$IDPuesto'";
    if ($conn->query($queryAceptado) === TRUE) { 
        print $IDAspiranteSelecto . "//"; 
        print $IDEmpresa . "//"; 
        print $IDSede . "//";
        print $IDPuesto .  "//"; 
       }else {
        echo "ERROR";
       }      

       if (!$conn -> query($queryAceptado)) {
        echo("Error description: " . $conn -> error);
      }
}

function borrado($conn, $IDAspiranteSelecto,$IDSede,$IDPuesto,$IDEmpresa)
{
    $valorSituacionDos = "Rechazado";
    $queryRechazo = "UPDATE Matching SET Situacion='$valorSituacionDos' WHERE IDAspirante = '$IDAspiranteSelecto' AND IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND IDPuesto = '$IDPuesto'";
    if ($conn->query($queryRechazo) === TRUE) { 
        echo "borrado";  
       }else {
        echo "ERROR";
       }
       
       if (!$conn -> query($queryRechazo)) {
        echo("Error description: " . $conn -> error);
      }
}
?>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>