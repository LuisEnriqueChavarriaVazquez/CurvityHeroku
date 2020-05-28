<?php
/*$servername = "localhost";
$username = "u253306330_curvity";
$password = "curvity";
$dbname = "u253306330_curvity";

$conn = mysqli_connect('localhost', 'u253306330_curvity', 'curvity', 'u253306330_curvity');

$selct = mysqli_query($conn,"select * from Empresa");
while ($dat = mysqli_fetch_assoc($selct)){
    $arr[] = $dat;
}

echo json_encode($arr);*/
if(isset($_POST['submit'])){
    echo "Funciono";
}
