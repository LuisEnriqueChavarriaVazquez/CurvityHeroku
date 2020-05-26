<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
gestionSedes.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>

<!--Declraciones para agregar la sede-->
<div class="boxSubjectsInicioExtended light-blue darken-4 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Agregar sede.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="post" action="logicaOperacionesEmpresa/validarFormAgregarSede.php"> <!--llamado al archivo validador-->
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Escriba el nombre." id="nombre_sede" name="nombre_sede" type="text" class="validate white-text" >
                    <label for="nombre_sede">Nombre de la sede.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Escriba la dirección" id="direccion_sede" name="direccion_sede" class="materialize-textarea white-text" data-length="200" ></textarea>
                    <label for="direccion_sede">Direccion de la sede.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su n&uacute;mero tel&eacute;fono." id="tel_sede" name="tel_sede" type="tel" class="validate white-text">
                    <label for="tel_sede">N&uacute;mero de tel&eacute;fono 1.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su n&uacute;mero tel&eacute;fono." id="tel_sede_dos" name="tel_sede_dos" type="tel" class="validate white-text">
                    <label for="tel_sede_dos">(Opcional) N&uacute;mero de tel&eacute;fono 2.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba el nombre del reclutador." id="nombre_reclutador" name="nombre_reclutador" type="text" class="truncate validate white-text" >
                    <label for="nombre_reclutador">Nombre del reclutador.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el email del reclutador." id="email_reclutador" name="email_reclutador" type="email" class="validate white-text truncate" >
                    <label for="email_reclutador">Email.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Asigne password de reclutador designado." id="password_reclutador" name="password_reclutador" type="password" class="validate white-text truncate" >
                    <label for="password_reclutador">Passoword del reclutador.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>



                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="facebook_sede" name="facebook_sede" type="text" class="validate white-text" >
                    <label for="facebook_aspirante">(Opcional) Facebook.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="skype_sede" name="skype_sede" type="text" class="validate white-text" >
                    <label for="skype_aspirante">(Opcional) Skype.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="twitter_sede" name="twitter_sede" type="text" class="validate white-text" >
                    <label for="twitter_aspirante">(Opcional) Twitter.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>
            </div>
            <a><button type="submit" name="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Agregar sede.</button></a>
        </form>
    </div>
</div>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>