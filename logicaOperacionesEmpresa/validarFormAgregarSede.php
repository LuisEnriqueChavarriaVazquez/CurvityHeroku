
<?php

//include '../includes/db.php';

//No se cargan aun los datos de las sedes
//Se establece la conexión a la base de datos.
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";

/*session_start();
    if (isset($_SESSION['username'])) {
        //asignar a variable
        $usernameSesion = $_SESSION['username'];
        //asegurar que no tenga "", <, > o &
        $username = htmlspecialchars($usernameSesion);       

        //usarla donde quieras
        echo "<p>¡Hola $username!</p>";*/


if (isset($_POST['submit'])) {
    $nombre_sede = $_POST["nombre_sede"];
    $direccion_sede = $_POST["direccion_sede"];
    $tel_sede = $_POST["tel_sede"];
    $nombre_reclutador = $_POST["nombre_reclutador"];
    $email_reclutador = $_POST["email_reclutador"];
    $password_reclutador = $_POST["password_reclutador"];
    $facebook_sede = $_POST["facebook_sede"];
    $skype_sede = $_POST["skype_sede"];
    $twitter_sede = $_POST["twitter_sede"];
    $contadorEleConfimados = 0;
    $errores = array();

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
        array_push($errores, "Nombre de sede inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($direccion_sede)) {
        array_push($errores, "Direccion inválida");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionTel($tel_sede)) {
        array_push($errores, "Tel 1 inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($nombre_reclutador)) {
        array_push($errores, "Nombre inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionMail($email_reclutador)) {
        array_push($errores, "Email inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($password_reclutador)) {
        array_push($errores, "Password inválido");
    } else {
        $contadorEleConfimados++;
    }

    if ($contadorEleConfimados == 6) {
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        $query = "INSERT INTO Sede(IDEmpresa, Nombre, Telefono, Direccion, NombreReclutador, CorreoElecReclutador,ContraReclutado,FacebookSed,SkypeSed,TwitterSed) VALUES (7,'$nombre_sede', '$tel_sede', '$direccion_sede','$nombre_reclutador','$email_reclutador','$password_reclutador', '$facebook_sede','$skype_sede','$twitter_sede')";

        if ($conn->query($query) == true) {
            echo  "<div class=´errors_box´><p class='success'>" . "Sede creada" . "</p></div>";
        } else {
            echo  "<div class=´errors_box´><p class='errors'>" . "Error de conexion" . "</p></div>";
        }
    } else {
        foreach ($errores as $val) {
            echo  "<div class=´errors_box´><p class='errors'>" . $val . "</p></div>";
        }
    }
}

?>