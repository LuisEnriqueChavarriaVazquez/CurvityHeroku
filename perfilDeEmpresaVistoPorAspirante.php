<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarSuperior.php' ?>
operacionesAspirante.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInferior.php' ?>

<?php
if (
    isset($_GET["Nombre"])
    && isset($_GET["RazonSocial"])
    && isset($_GET["Direccion"])
    && isset($_GET["Tipo"])
    && isset($_GET["Telefono"])
    && isset($_GET["DireccionWeb"])
    && isset($_GET["FacebookEmpresa"])
    && isset($_GET["TwitterEmpresa"])
    && isset($_GET["SkypeEmpresa"])
) {
    $Nombre = $_GET["Nombre"];
    $RazonSocial = $_GET["RazonSocial"];
    $Direccion = $_GET["Direccion"];
    $Tipo = $_GET["Tipo"];
    $Telefono = $_GET["Telefono"];
    $DireccionWeb = $_GET["DireccionWeb"];
    $FacebookEmpresa = $_GET["FacebookEmpresa"];
    $TwitterEmpresa = $_GET["TwitterEmpresa"];
    $SkypeEmpresa = $_GET["SkypeEmpresa"];
} else {
    print "FATAL ERROR";
}
?>


<!--Aqui tenemos el header con la imagen de la empresa (esa la tenemos que jalar de la base de datos)-->
<section class="containerPicture" id="logo-container">
    <img src="pictures/backgroundEmpresa.jpg" class="imgFormater">
</section>
<div id="nav-container-top"></div>
<div class="stickyTitleContainer" id="nav-container">
    <div class="nombreEmpresaPerfil z-depth-2" id="containerPicture">
        <p><?php echo $Nombre; ?></p>
    </div>
</div>

<!--Cuerpo de las secciones-->
<div class="boxSubjects blue-grey lighten-5">
    <!--CADA CARD NOS DEBE LLEVAR AL ARCHIVO DE vistaEnvioSolicitud-->
    <!--Aqui estamos reciclando las cards que teniamos en la vista previa al SWIPE-->
    <p class="titles">Ofertas publicadas.</p>
    <!--Nueva card-->
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php'; ?>
    Ingeniero en sistemas
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php'; ?>
    <!--Nueva card-->
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php'; ?>
    Ingeniero en sistemas
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php'; ?>
    <!--Nueva card-->
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardSuperior.php'; ?>
    Ingeniero en sistemas
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardGestion/cardInferior.php'; ?>


    <!--Aqui empiezan los datos de la empresa-->

    <p class="titles">Datos de empresa.</p>

    <div class="sizeCardForm backgroundCardOferta borderCardInicio z-depth-3 row">
        <div class="col s12">
            <p class="titleOfertaFinal truncate">Razón Social.</p>
            <p class="descripcionOfertaFinal"><?php echo $RazonSocial; ?></p>
        </div>

        <div class="col s12">
            <p class="titleOfertaFinal truncate">Direccion.</p>
            <p class="descripcionOfertaFinal"><?php echo $Direccion; ?></p>
        </div>

        <div class="col s12">
            <p class="titleOfertaFinal truncate">Tipo.</p>
            <p class="descripcionOfertaFinal"><?php echo $Tipo; ?></p>
        </div>


    </div>

    <div class="sizeCardForm backgroundCardOferta borderCardInicio z-depth-3 row">
        <div class="col s6">
            <p class="titleOfertaFinal truncate">Facebook.</p>
            <p class="descripcionOfertaFinal"><?php echo $FacebookEmpresa; ?></p>
        </div>

        <div class="col s6">
            <p class="titleOfertaFinal truncate">Twitter.</p>
            <p class="descripcionOfertaFinal"><?php echo $TwitterEmpresa; ?></p>
        </div>

        <div class="col s6">
            <p class="titleOfertaFinal truncate">Skype.</p>
            <p class="descripcionOfertaFinal"><?php echo $SkypeEmpresa; ?></p>
        </div>

        <div class="col s6">
            <p class="titleOfertaFinal truncate">Telefonos.</p>
            <p class="descripcionOfertaFinal"><?php echo $Telefono; ?></p>
        </div>

        <div class="col s12">
            <p class="titleOfertaFinal truncate">Email.</p>
            <p class="descripcionOfertaFinal"><?php echo $DireccionWeb; ?></p>
        </div>
    </div>


</div>



<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>