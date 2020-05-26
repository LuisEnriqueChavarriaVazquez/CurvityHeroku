<?php
$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$selct = mysqli_query($conn, "select * from Empresa");
while ($dat = mysqli_fetch_assoc($select)){
    $arr[] = $dat;
}

echo json_encode($arr);