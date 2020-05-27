<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
gestionSedes.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>


<div class="boxSubjectsInicioExtended blue-grey lighten-5 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Borrar sedes.</p>
    </div>


    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardSuperior.php' ?>
    Sede norte
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardInferior.php' ?>
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardSuperior.php' ?>
    Sede sur
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardInferior.php' ?>
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardSuperior.php' ?>
    Oficinas centrales norte
    <?php include 'AlmacenIncludesPHP/elementosPhp/cardsEraseElements/eraseCardInferior.php' ?>

    <br>
    <br>
    <br>

    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Validación seguridadss.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="post" action="eliminarSede.php">
            <!--llamado al archivo validador-->
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Confirme nombre de la empres." id="nombre_empresa_eliminar" name="nombre_empresa_eliminar" type="text" class="validate white-text">
                    <label for="nombre_empresa_eliminar">Nombre de la sede.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Confirme el nombre de su empresa." id="contrasena_eliminar_empresa" name="contrasena_eliminar_empresa" type="password" class="validate white-text">
                    <label for="contrasena_eliminar_empresa">Confirme contraseña de EMPRESA.</label>
                </div>
            </div>

            <a><button type="submit" name="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Confirmar datos Empresa.</button></a>

            <?php
            include("logicaOperacionesEmpresa/validarFormEliminarSede.php");
            ?>
        </form>

    </div>


</div>


<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>