<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
gestionSedes.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>

<!--Declraciones para agregar la sede-->
<?php
   
 if(!isset($_SESSION)){
    session_start();
 }

  if(!isset($nombre_sede)){
    $nombre_sede="";
  }

  if(!isset($direccion_sede)){
    $direccion_sede="";
  }

  if(!isset($tel_sede)){
    $tel_sede="";
  }

  if(!isset($tel_sede_dos)){
    $tel_sede_dos="";
  }

  if(!isset($nombre_reclutador)){
    $nombre_reclutador="";
  }

  if(!isset($email_reclutador)){
    $email_reclutador="";
  }

  if(!isset($password_reclutador)){
    $password_reclutador="";
  }

  if(!isset($facebook_sede)){
    $facebook_sede="";
  }

  if(!isset($skype_sede)){
    $skype_sede="";
  }

  if(!isset($twitter_sede)){
    $twitter_sede="";
  }

?>

<div class="boxSubjectsInicioExtended light-blue darken-4 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Agregar sede.</p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12" method="post" action="logicaOperacionesEmpresa/validarFormAgregarSede.php"> <!--llamado al archivo validador-->
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Escriba el nombre." id="nombre_sede" name="nombre_sede" type="text" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($nombre_sede)
                    ?>" >
                    <label for="nombre_sede">Nombre de la sede.</label>
                    <?php
                       if(isset($nombre_error_sede)){
                       echo  "<p class='white-text'>".$nombre_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Escriba la dirección" id="direccion_sede" name="direccion_sede" class="materialize-textarea white-text" data-length="200"
                    value="<?php 
                     echo  htmlspecialchars ($direccion_sede)
                    ?>" ></textarea>
                    <label for="direccion_sede">Direccion de la sede.</label>
                    <?php
                       if(isset($direccion_error_sede)){
                       echo  "<p class='white-text'>".$direccion_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su n&uacute;mero tel&eacute;fono." id="tel_sede" name="tel_sede" type="tel" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($tel_sede)
                    ?>">
                    <label for="tel_sede">N&uacute;mero de tel&eacute;fono 1.</label>
                    <?php
                       if(isset($tel_error_sede)){
                       echo  "<p class='white-text'>".$tel_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su n&uacute;mero tel&eacute;fono." id="tel_sede_dos" name="tel_sede_dos" type="tel" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($tel_sede_dos)
                    ?>" >
                    <label for="tel_sede_dos">(Opcional) N&uacute;mero de tel&eacute;fono 2.</label>
                    <?php
                       if(isset($tel_error_sede)){
                       echo  "<p class='white-text'>".$tel_error_sede."</p>";
                      } ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba el nombre del reclutador." id="nombre_reclutador" name="nombre_reclutador" type="text" class="truncate validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($nombre_reclutador)
                    ?>" >
                    <label for="nombre_reclutador">Nombre del reclutador.</label>
                    <?php
                       if(isset($nombre_reclutador_error_sede)){
                       echo  "<p class='white-text'>".$nombre_reclutador_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el email del reclutador." id="email_reclutador" name="email_reclutador" type="email" class="validate white-text truncate"
                    value="<?php 
                     echo  htmlspecialchars ($email_reclutador)
                    ?>" >
                    <label for="email_reclutador">Email.</label>
                    <?php
                       if(isset($mail_error_sede)){
                       echo  "<p class='white-text'>".$mail_error_sede."</p>";
                      } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Asigne password de reclutador designado." id="password_reclutador" name="password_reclutador" type="password" class="validate white-text truncate"
                    value="<?php 
                     echo  htmlspecialchars ($password_reclutador)
                    ?>" >
                    <label for="password_reclutador">Passoword del reclutador.</label>
                    <?php
                       if(isset($password_error_sede)){
                       echo  "<p class='white-text'>".$password_error_sede."</p>";
                      } ?>
                </div>



                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="facebook_sede" id="facebook_sede" type="text" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($facebook_sede)
                    ?>" >
                    <label for="facebook_aspirante">(Opcional) Facebook.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="skype_sede" id="skype_sede" type="text" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($skype_sede)
                    ?>" >
                    <label for="skype_aspirante">(Opcional) Skype.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="twitter_sede" id="twitter_sede" type="text" class="validate white-text"
                    value="<?php 
                     echo  htmlspecialchars ($twitter_sede)
                    ?>" >
                    <label for="twitter_aspirante">(Opcional) Twitter.</label>
                </div>
            </div>
        </form>
    </div>
    <a><button type="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Agregar sede.</button></a>
</div>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>