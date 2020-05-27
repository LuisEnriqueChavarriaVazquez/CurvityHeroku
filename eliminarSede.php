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

    
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Agregar sede.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="post" action="agregarSede.php">
            <!--llamado al archivo validador-->
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Confirme nombre de la empres." id="nombre_empresa_sede" name="nombre_empresa_sede" type="text" class="validate white-text">
                    <label for="nombre_empresa_sede">Nombre de la sede.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Confirme el nombre de su empresa." id="contrasena_sede_empresa" name="contrasena_sede_empresa" type="password" class="validate white-text">
                    <label for="contrasena_sede_empresa">Confirme contraseña de EMPRESA.</label>
                </div>
            </div>
        </form>

    </div>


</div>


<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>