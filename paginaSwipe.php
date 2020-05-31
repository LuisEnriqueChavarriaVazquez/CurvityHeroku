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
    $queryAceptado = "UPDATE Matching SET Situacion='Aceptado' WHERE IDAspirante = '$IDAspiranteSelecto' AND IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND IDPuesto = '$IDPuesto'";
    if ($conn->query($queryAceptado) === TRUE) {   
        print "perro2";
       }else {
        echo "ERROR";
       }      
}

function borrado($conn, $IDAspiranteSelecto,$IDSede,$IDPuesto,$IDEmpresa)
{
    $queryAceptado = "UPDATE Matching SET Situacion='Rechazado' WHERE IDAspirante = '$IDAspiranteSelecto' AND IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND IDPuesto = '$IDPuesto'";
    if ($conn->query($queryAceptado) === TRUE) {   
       }else {
        echo "ERROR";
       }      
}
?>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>