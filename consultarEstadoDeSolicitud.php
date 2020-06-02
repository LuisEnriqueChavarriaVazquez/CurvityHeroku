<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
index_asp.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>


<div class="boxSubjectsInicioExtended centerElements">

    <div class="cardTitleOfertaFinal">
        <p class="titleOfertaFinal truncate black-text">Estado de ofertas enviadas.</p>
    </div>

    <?php include("logicaOperacionesAspirante/mostrarEstadoSolicitudes.php"); ?>

    
</div>



<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>