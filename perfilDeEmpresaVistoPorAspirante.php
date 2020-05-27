<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarSuperior.php' ?>
index_asp.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInferior.php' ?>

<script src="scripts/jq.js"></script>


<!--Aqui tenemos el header con la imagen de la empresa (esa la tenemos que jalar de la base de datos)-->
<div class="containerPicture">
    <img src="pictures/backgroundEmpresa.jpg" class="imgFormater">
</div>
<section class="stickyTitleContainer">
    <div class="nombreEmpresaPerfil z-depth-2">
        <p>Nombre_empresa</p>
    </div>
</section>

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

    <div class="sizeCardForm backgroundCardOferta borderCardInicio z-depth-3">
        <div>
            <p class="titleOfertaFinal truncate">Descripción.</p>
            <p class="descripcionOfertaFinal">Lorem ipsum dolor sit amet, consectetur adipisicing elconsectetur adipisicing el.
                Lorem ipsum dolor sit amet, consectetur adipisicing elconsectetur adipisicing el.
                Lo</p>
        </div>

        <div>
            <p class="titleOfertaFinal truncate">Facebook.</p>
            <p class="descripcionOfertaFinal">Nombre_cuentas</p>
        </div>

        <div>
            <p class="titleOfertaFinal truncate">Twitter.</p>
            <p class="descripcionOfertaFinal">Nombre_cuentas</p>
        </div>

        <div>
            <p class="titleOfertaFinal truncate">Skype.</p>
            <p class="descripcionOfertaFinal">Nombre_cuentas</p>
        </div>

        <div>
            <p class="titleOfertaFinal truncate">Telefonos.</p>
            <p class="descripcionOfertaFinal">55XXXXXX</p>
        </div>

        <div>
            <p class="titleOfertaFinal truncate">Email.</p>
            <p class="descripcionOfertaFinal">empresa@gmail.com</p>
        </div>

        <div id="provandoJson">

            provandoJson de texto
        </div>
    </div>

</div>

<?php include("logicaOperacionesAspirante/mostrarDatosDeLaEmpresa.php"); ?>


<!--Estoy usando AJAX para que tengamos acceso a la base de datos-->
<script>
    $(document).ready(function() {
        $.ajax({ //create an ajax request to display.php
            type: "GET",
            url: "display.php",
            dataType: "html", //expect html to be returned                
            success: function(response) {
                $("#responsecontainer").html(response);
                //alert(response);
            }
        });
    });
</script>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>