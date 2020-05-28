<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
include 'includes/Conexion.php';

    $dato=$user->getCorreo();
    
    $sql="SELECT *from Aspirante where CorreoElec='$dato'";
    $result=mysqli_query($conexion,$sql);

    $ver=mysqli_fetch_row($result);

    $datos=array(
                    'IDAspirante'=>$ver[0],
                    'Nombre'=>$ver[1],
                    'Contra'=>$ver[2],
                    'ApellidoPat'=> $ver[3],
                    'ApellidoMat'=>$ver[4],
                    'SueldoDeseado'=>$ver[5],
                    'Direccion'=>$ver[6],
                    'Escuela'=>$ver[7],
                    'NivelAcademico'=>$ver[8],
                    'CorreoElec'=>$ver[9],
                    'ResumenExpPrevLab'=>$ver[10],
                    'ResumenHab'=>$ver[11],
                    'numeroIdiomas'=>$ver[12],
                    'detallesIdiomas'=>$ver[13],
                    'FacebookAspirante'=>$ver[14],
                    'SkypeAspirante'=>$ver[15],
                    'TwitterAspirante'=>$ver[16],
                    'FotoPerfil'=>$ver[17]
                );

    include_once 'editarPerfilAspirante.php';
?>
<?php
    
    if(!isset($_SESSION)){
        session_start();
    }

    if(!isset($nombreAs)){
        $nombreAs="";
    }

    if(!isset($apelPatAs)){
        $apelPatAs="";
    }

    if(!isset($apelMatAs)){
        $apelMatAs="";
    }

    if(!isset($mailAs)){
        $mailAs="";
    }

    if(!isset($password_error)){
        $password_error="";
    }

    if(!isset($fechaNacAs)){
        $fechaNacAs="";
    }

    if(!isset($escuelaAs)){
        $escuelaAs="";
    }

    if(!isset($nivelAcAs)){
        $nivelAcAs="";
    }

    if(!isset($direccionAs)){
        $direccionAs="";
    }

    if(!isset($facebookAs)){
        $facebookAs="";
    }

    if(!isset($skypeAs)){
        $skypeAs="";
    }

    if(!isset($twitterAs)){
        $twitterAs="";
    }

    if(!isset($dirArchivoAsp)){
        $dirArchivoAsp="";
    }
        
    if(!isset($habiliAsp)){
        $habiliAsp="";
    }

    if(!isset($expAsp)){
        $expAsp="";
    }

    if(!isset($cantidadIdiomasAsp)){
        $cantidadIdiomasAsp="";
    }

    if(!isset($idiomasEspAsp)){
        $idiomasEspAsp="";
    }

    if(!isset($sueldoAsp)){
        $sueldoAsp="";
    }
?>
<body onload="asignar()">
<?php  include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoSuperior.php' ?>
index_asp.php
<?php include 'AlmacenIncludesPHP/elementosPhp/navbarRetorno/navbarInicialRetornoInferior.php' ?>
<body onload="asignar();">
<div  class="boxSubjectsInicioExtended light-blue darken-4 centerElements">
    <div class="sizeCardInicioSmall backgroundCardInicio borderCardInicio z-depth-3">
        <p class="white-text textCardInicioSamll centerElements">Datos editables. Bienvenido <?php echo $dato;  ?></p>
    </div>
    <div class="sizeCardForm backgroundCardForm borderCardInicio z-depth-3">
        <form class="col s12">
                <div class="input-field col s12">
                    <input placeholder="Escriba su nombre." id="nombre_aspirante" name="nombre_aspirante" 
                    value="<?php 
                    echo $ver[1]['Nombre']
                    ?>" 
                    type="text" class="validate white-text">
                    <label for="nombre_aspirante">Nombre.</label>
                    <?php
                        if(isset($Nombre_error)){
                        echo  "<p class='white-text'>".$Nombre_error."</p>";
                    } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el apellido paterno." id="apellido_paterno" name="apellido_paterno"
                    value="<?php 
                    echo  htmlspecialchars ($apelPatAs)
                    ?>" 
                    type="text" class="validate white-text">
                    <label for="apellido_paterno">Apellido paterno.</label>
                    <?php
                    if(isset($apPaterno_error)){
                    echo  "<p class='white-text'>".$apPaterno_error."</p>";
                    } ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba el apellido materno." id="apellido_materno" name="apellido_materno" 
                    value="<?php 
                    echo  htmlspecialchars ($apelMatAs)
                    ?>" 
                    type="text" class="validate white-text">
                    <label for="apellido_materno">Apellido  materno.</label>
                    <?php
                        if(isset($apMaterno_error)){
                            echo "<p class='white-text'>".$apMaterno_error."</p>";
                        }
                    ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba su email." id="mail" name="mail"
                    value="<?php 
                        echo  htmlspecialchars ($mailAs)
                    ?>" 
                    type="email" class="validate white-text">
                    <label for="first_name">Email.</label>
                    <?php
                        if(isset($mail_error)){
                            echo "<p class='white-text'>".$mail_error."</p>";
                        }
                    ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Cree su password de CURVITY." id="password" name="password" type="password" class="validate white-text">
                    <label for="password">Password.</label>
                    <?php
                        if(isset($password_error)){
                            echo "<p class='white-text'>".$password_error."</p>";
                        }
                    ?>
                </div>

                <div class="input-field col s12">
                    <input type="text" placeholder="Seleccione su fecha de nacimiento." id="fecha_nac" name="fecha_nac" 
                    value="<?php 
                        echo  htmlspecialchars ($fechaNacAs)
                    ?>" 
                    class="validate datepicker white-text">
                    <label for="fecha_nac">Fecha de nacimiento.</label>
                    <?php
                        if(isset($fecha_error)){
                            echo "<p class='white-text'>".$fecha_error."</p>";
                        }
                    ?>
                </div>

                <div class="input-field col s12">
                    <input placeholder="Escriba su escuela de procedencia." id="alama_mater" name="alama_mater"
                    value="<?php 
                        echo  htmlspecialchars ($escuelaAs)
                    ?>" type="text" class="validate white-text">
                    <label for="alma_mater">Alma mater.</label>
                    <?php
                        if(isset($escuela_error)){
                            echo "<p class='white-text'>".$escuela_error."</p>";
                        }
                    ?>
                </div>
                
                <div class="input-field col s12">
                    <select class="white-text" name="nivel_acad">
                        <option value="0" 
                        <?php
                            if($nivelAcAs==""){
                                echo "selected";
                            }
                        ?>
                        >Nivel Acad&eacute;mico.</option>
                        <option value="1"
                        <?php
                            if($nivelAcAs=="1"){
                                echo "selected";
                            }
                        ?>
                        >Universidad.</option>
                        <option value="2"
                        <?php
                            if($nivelAcAs=="2"){
                                echo "selected";
                            }
                        ?>
                        >Carrera t&eacute;cnica.</option>
                        <option value="3"
                        <?php
                            if($nivelAcAs=="3"){
                                echo "selected";
                            }
                        ?>
                        >Preparatoria.</option>
                        <option value="4"
                        <?php
                            if($nivelAcAs=="4"){
                                echo "selected";
                            }
                        ?>
                        >Secundaria</option>
                    </select>
                    <label>Nivel Acad&eacute;mico</label>
                    <?php
                        if(isset($nivelAcad_error)){
                            echo "<p class='white-text'>".$nivelAcad_error."</p>";
                        }
                    ?>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Escriba la dirección" id="direccion_aspirante" name="direccion_aspirante"
                    class="materialize-textarea white-text" data-length="200"><?php 
                    echo  htmlspecialchars ($direccionAs)
                    ?></textarea>
                    <label for="direccion_aspirante">Direccion donde recide.</label>
                    <?php
                        if(isset($direccion_error)){
                            echo "<p class='white-text'>".$direccion_error."</p>";
                        }
                    ?>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="facebook" name="facebook"
                    value="<?php 
                        echo  htmlspecialchars ($facebookAs)
                    ?>" type="text" class="validate white-text">
                    <label for="facebook_aspirante">(Opcional) Facebook.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="skype" name="skype" 
                    value="<?php 
                        echo  htmlspecialchars ($skypeAs)
                    ?>"
                    type="text" class="validate white-text">
                    <label for="skype_aspirante">(Opcional) Skype.</label>
                </div>
                <div class="input-field col s12">
                    <input placeholder="Escriba la red social" id="twitter" name="twitter" 
                    value="<?php 
                        echo  htmlspecialchars ($skypeAs)
                    ?>"
                    type="text" class="validate white-text">
                    <label for="twitter_aspirante">(Opcional) Twitter.</label>
                </div>

                <!--Foto de perfil-->
                <div class="file-field input-field">
                    <div class="btn white blue-text text-darken-4">
                        <span>Foto de perfil</span>
                        <input type="file" id="archivo_aspirante" name="archivo_aspirante">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" id="archivoDir_aspirante" name="archivoDir_aspirante" 
                        value="<?php
                            echo  htmlspecialchars ($dirArchivoAsp)
                        ?>"
                        type="text">
                        <?php
                        if(isset($dirArchivo_error)){
                        echo  "<p class='white-text'>".$dirArchivo_error."</p>";
                        } ?>
                    </div>
                <br>
                                <!--Describe tus habilidades-->
                <div class="input-field col s12">
                    <textarea placeholder="Habilidades con que cuenta" id="habilidades_aspirante" name="habilidades_aspirante"  class="materialize-textarea white-text" data-length="200"><?php
                       echo  htmlspecialchars ($habiliAsp)
                    ?></textarea>
                    <label for="habilidades_aspirante">Habilidades.</label>
                    <?php
                       if(isset($habilidades_error)){
                       echo  "<p class='white-text'>".$habilidades_error."</p>";
                     } ?>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Experiencia laboral." id="experiencia_laboral" name="experiencia_laboral" class="materialize-textarea white-text" data-length="200"><?php
                        echo  htmlspecialchars ($expAsp)
                    ?></textarea>
                    <label for="experiencia_laboral">Experiencia laboral.</label>
                    <?php
                       if(isset($experiencia_error)){
                       echo  "<p class='white-text'>".$experiencia_error."</p>";
                        } ?>
                </div>

                <!--Idiomas que domina-->
                <div class="input-field col s12">
                    <input placeholder="Cantidad de idiomas." id="cantidad_de_idiomas" name="cantidad_de_idiomas"
                     value="<?php
                            echo  htmlspecialchars ($cantidadIdiomasAsp)
                        ?>"
                     type="text" class="validate white-text truncate">
                    <label for="cantidad_de_idiomas">Cantidad de idiomas que domina.</label>
                    <?php
                       if(isset($cantidadIdiomas_error)){
                       echo  "<p class='white-text'>".$cantidadIdiomas_error."</p>";
                        } ?>
                </div>

                <div class="input-field col s12">
                    <textarea placeholder="Idiomas que domina" id="idiomas_domina" name="idiomas_domina" class="materialize-textarea white-text" data-length="200"><?php
                            echo  htmlspecialchars ($idiomasEspAsp)
                        ?></textarea>
                    <label for="idiomas_domina">Cuentenos que idiomas domina.</label>
                    <?php
                       if(isset($idiomasEsp_error)){
                       echo  "<p class='white-text'>".$idiomasEsp_error."</p>";
                        } ?>
                </div>

                <!--Sueldo ideal-->
                <div class="input-field col s12">
                    <input placeholder="Ejemplo 30500" id="sueldo_ideal" name="sueldo_ideal"
                    value="<?php
                        echo  htmlspecialchars ($sueldoAsp)
                     ?>"
                     type="text" class="validate white-text truncate">
                    <label for="sueldo_ideal">Sueldo ideal.</label>
                    <?php
                       if(isset($sueldo_error)){
                       echo  "<p class='white-text'>".$sueldo_error."</p>";
                        } ?>
                </div>
            </div>
        </form>
    </div>
    <a href="operacionesAspirante.php"><button type="submit" class="waves-effect btn-large borderButton sizeButton textButton grey lighten-5 blue-text text-darken-4">Guardar cambios.</button></a>
</div>
<script>
        function asignar(){
        var nombre = document.getElementById("nombre_aspirante");
        var app =document.getElementById("apellido_paterno");
        var apm=document.getElementById("apellido_materno");
        var correo=document.getElementById("mail");

        nombre.value ="hola jajaj";
        /*app.value=$ver[2];
        apm.value=$ver[3];
        correo.value=$ver[4];*/
        }  
</script>
<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>
</body>