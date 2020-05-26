<?php
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$salida = "";

$query = "SELECT * FROM Empresa WHERE Name NOT LIKE '' ORDER By IDEmpresa LIMIT 10";

if (isset($_POST['consulta'])) {
    $q = $conn->real_escape_string($_POST['consulta']);
    $query = "SELECT * FROM Empresa WHERE Nombre LIKE '%$q%'";
}

$resultado = $conn->query($query);

if ($resultado = $conn->query($query)) {
    if ($resultado->num_rows > 0) {
        $salida .= "<div>
        
        


        ";

        while ($fila = $resultado->fetch_assoc()) {
            $salida .= "
            <div class='col s6 m6 borderCardInicio cardEmpleoNueva'>
      <a href='perfilDEmpresaVistoPorAspirante.php'>
        <div class='card borderCardInicio waves-effect'>
        <div class='card-image'>" . "<img class='card-image' src='data:image/jpeg; base64," . base64_encode($fila['FotoLogo']) . "'>" . "</div>
          <div class='card-content'>
            <p class='flow-text noLinkStyle'>" . $fila['Nombre'] . "</p>
          </div>
        </div>
      </a>
    </div>
    				";
        }
        $salida .= "</div>";
    } else {
        $salida .= "<div style='width:100%'><h5>Sin resultados</h5></div>";
    }
}


echo $salida;

$conn->close();
