<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
gestionOfertas.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>


<div class="boxSubjectsInicioExtended light-blue darken-4 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Nueva oferta.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Escriba el nombre de la nueva oferta." id="nombre_puesto" name="nombre_puesto" type="text" class="truncate validate white-text">
                    <label for="nombre_oferta">Nombre oferta.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el pago oferta." id="pago_puesto" name="pago_puesto" type="text" class="truncate validate white-text">
                    <label for="pago_ofertado">Pago ofertado.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Semanal, Mensual, Por proyecto, por hora,etc." id="modalidad_puesto" name="modalidad_puesto" type="text" class="truncate validate white-text">
                    <label for="modalidad_de_pago">Modalidad de pago.</label>
                </div>
                <div class="input-field col s12">
                    <textarea placeholder="Escriba los requerimientos básicos" id="requerimientos_puesto" name="requerimientos_puesto" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="requerimientos_basicos">Requerimientos básicos.</label>
                </div>
                <div class="input-field col s12">
                    <textarea placeholder="Escriba las prestaciones" id="prestaciones_puesto" name="prestaciones_puesto" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="prestaciones_oferta">Prestaciones ofertadas de la empresa.</label>
                </div>
            </div>
            <a><button type="submit" name="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Agregar oferta.</button></a>

            <?php 
                include("logicaOperacionesReclutador/validarFormAgregarOferta.php");
            ?>

        </form>
    </div>
</div>

<!--Aqui tenemos el mensaje emergente que sale en la pantalla-->
<?php include 'AlmacenIncludesPHP/elementosPhp/popUps/advertenciaCambiosAgregarOferta.php'?>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>