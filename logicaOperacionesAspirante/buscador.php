<?php
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";


if (isset($_POST['submit'])) {
    $busca = $_POST["busca"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($busca != ""){
        $sql = "SELECT Nombre FROM Empresa WHERE Nombre like '%".$busca."%'";
        $result = $conn->query($sql);
    }

    if ($result = $conn->query($sql)) {

        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            printf ("%s (%s)\n", $row["Nombre"]);
        }
    
        /* free result set */
        $result->close();
    }

}
