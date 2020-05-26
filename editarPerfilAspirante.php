<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
operacionesAspirante.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>


<div class="boxSubjectsInicioExtended light-blue darken-4 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Datos editables.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="POST" action="logicaOperacionesAspirante/validarEditarPerfilAspirante.php">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Escriba su nombre." id="nombre_aspirante" name="nombre_aspirante" type="text" class="validate white-text">
                    <label for="nombre_aspirante">Nombre.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el apellido paterno." id="apellido_paterno" name="apellido_paterno" type="text" class="validate white-text">
                    <label for="apellido_paterno">Apellido paterno.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el apellido materno." id="apellido_materno" name="apellido_materno" type="text" class="validate white-text">
                    <label for="apellido_materno">Apellido paterno.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba su email." id="mail" name="mail" type="email" class="validate white-text">
                    <label for="first_name">Email.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Cree su passoword de CURVITY." id="password" name="password" type="password" class="validate white-text">
                    <label for="password">Passoword.</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" placeholder="Seleccione su fecha de nacimiento." id="fecha_nac" name="fecha_nac" class="validate datepicker white-text">
                    <label for="fecha_nac">Fecha de nacimiento.</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su escuela de procedencia." id="alama_mater" name="alama_mater" type="text" class="validate white-text">
                    <label for="alma_mater">Alma mater.</label>
                </div>

                <div class="input-field col s12">
                    <select class="white-text" name="nivel_acad">
                        <option value="" selected>Nivel Acad&eacute;mico.</option>
                        <option value="1">Universidad.</option>
                        <option value="2">Carrera t&eacute;cnica.</option>
                        <option value="2">Preparatoria.</option>
                        <option value="3">Secundaria</option>
                    </select>
                    <label>Nivel Acad&eacute;mico</label>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Escriba la dirección" id="direccion_aspirante" name="direccion_aspirante" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="direccion_aspirante">Direccion donde recide.</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su n&uacute;mero tel&eacute;fono." id="tel_aspirante" name="tel_aspirante" type="tel" class="validate white-text">
                    <label for="tel_aspirante">N&uacute;mero de tel&eacute;fono.</label>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="facebook" name="facebook" type="text" class="validate white-text">
                    <label for="facebook_aspirante">(Opcional) Facebook.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="skype" name="skype" type="text" class="validate white-text">
                    <label for="skype_aspirante">(Opcional) Skype.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="twitter" name="twitter" type="text" class="validate white-text">
                    <label for="twitter_aspirante">(Opcional) Twitter.</label>
                </div>

                <!--Foto de perfil-->
                <div class="file-field input-field">
                    <div class="btn white blue-text text-darken-4">
                        <span>Foto de perfil</span>
                        <input type="file" id="archivo_aspirante" name="archivo_aspirante">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
                <br>

                <!--Describe tus habilidades-->
                <div class="input-field col s12">
                    <textarea placeholder="Habilidades con que cuenta" id="habilidades_aspirante" name="habilidades_aspirante" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="habilidades_aspirante">Habilidades.</label>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Experiencia laboral." id="experiencia_laboral" name="experiencia_laboral" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="experiencia_laboral">Experiencia laboral.</label>
                </div>


                <!--Idiomas que domina-->
                <div class="input-field col s12">
                    <input placeholder="Cantidad de idiomas." id="cantidad_de_idiomas" name="cantidad_de_idiomas" type="text" class="validate white-text truncate">
                    <label for="cantidad_de_idiomas">Cantidad de idiomas que domina.</label>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Idiomas que domina" id="idiomas_domina" name="idiomas_domina" class="materialize-textarea white-text" data-length="200"></textarea>
                    <label for="idiomas_domina">Cuentenos que idiomas domina.</label>
                </div>

                <!--Sueldo ideal-->
                <div class="input-field col s12">
                    <input placeholder="Ejemplo 30500" id="sueldo_ideal" name="sueldo_ideal" type="text" class="validate white-text truncate">
                    <label for="sueldo_ideal">Sueldo ideal.</label>
                </div>
            </div>
            <a><button type="submit" name="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Guardar cambios.</button></a>
        </form>
    </div>
</div>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>