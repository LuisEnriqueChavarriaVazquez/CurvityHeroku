<?php


if (isset($_POST['submit'])) {
    $nombre_sede = $_POST["nombre_sede"];
    $direccion_sede = $_POST["direccion_sede"];
    $tel_sede = $_POST["tel_sede"];
    $tel_sede_dos = $_POST["tel_sede_dos"];
    $nombre_reclutador = $_POST["nombre_reclutador"];
    $email_reclutador = $_POST["email_reclutador"];
    $password_reclutador = $_POST["password_reclutador"];
    $facebook_sede = $_POST["facebook_sede"];
    $skype_sede = $_POST["skype_sede"];
    $twitter_sede = $_POST["twitter_sede"];
    $contadorEleConfimados = 0;

    function validacionNormal($StringEntrada)
    {
        if (empty($StringEntrada) || trim($StringEntrada) == "") {
            return False;
        } else {
            return True;
        }
    }

    function validacionMail($StringEntrada)
    {
        if (empty($StringEntrada) || trim($StringEntrada) == "") {
            return False;
        } elseif (!filter_var($StringEntrada, FILTER_VALIDATE_EMAIL)) {
            return False;
        } else {
            return True;
        }
    }

    function validacionTel($StringEntrada)
    {
        if (empty($StringEntrada) || trim($StringEntrada) == "") {
            return False;
        } elseif (!preg_match("/^[0-9]+$/", $StringEntrada)) {
            return False;
        } else {
            return True;
        }
    }

    if (!validacionNormal($nombre_sede)) {
        $nombre_error_sede = "Nombre invalido";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($direccion_sede)) {
        $direccion_error_sede = "La direccion es invalida";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionTel($tel_sede)) {
        $tel_error_sede = "Tel&eacute;fono invalido";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionTel($tel_sede_dos)) {
        $tel_error_sede = "Tel&eacute;fono invalido";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($nombre_reclutador)) {
        $nombre_reclutador_error_sede = "Nombre invalido";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionMail($email_reclutador)) {
        $mail_error_sede = "Correo invalido";
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($password_reclutador)) {
        $password_error_sede = "Password invalida";
    } else {
        $contadorEleConfimados++;
    }

    echo  "<p class='white-text'>".$Nombre_error."</p>";
}

?>
<!--
//Guardarmos en variables los datos recibidos del form
/*if (isset($_POST['nombre_sede'])) {
    $nombre_sede = $_POST["nombre_sede"];
    $direccion_sede = $_POST["direccion_sede"];
    $tel_sede = $_POST["tel_sede"];
    $tel_sede_dos = $_POST["tel_sede_dos"];
    $nombre_reclutador = $_POST["nombre_reclutador"];
    $email_reclutador = $_POST["email_reclutador"];
    $password_reclutador = $_POST["password_reclutador"];
    $facebook_sede = $_POST["facebook_sede"];
    $skype_sede = $_POST["skype_sede"];
    $twitter_sede = $_POST["twitter_sede"];
    $contadorEleConfimados = 0;

    

    

    
    /*if ($contadorEleConfimados == 7) {
        $_SESSION["nombre_sede"] = $nombre_sede;
        $_SESSION["direccion_sede"] = $direccion_sede;
        $_SESSION["tel_sede"] = $tel_sede;
        $_SESSION["tel_sede_dos"] = $tel_sede_dos;
        $_SESSION["nombre_reclutador"] = $nombre_reclutador;
        $_SESSION["email_reclutador"] = $email_reclutador;
        $_SESSION["password_reclutador"] = $password_reclutador;

        if (validacionNormal($facebook_sede)) {
            $_SESSION["facebook_sede"] = $facebook_sede;
        }
        if (validacionNormal($skype_sede)) {
            $_SESSION["skype_sede"] = $skype_sede;
        }
        if (validacionNormal($twitter_sede)) {
            $_SESSION["twitter_sede"] = $twitter_sede;
        }
        include("gestionSedes.php");
    } else {
        include("agregarSede.php");
    }*/-->
