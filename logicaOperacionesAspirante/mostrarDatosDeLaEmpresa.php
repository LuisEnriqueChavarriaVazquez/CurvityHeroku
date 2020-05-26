<?php

function conectar(){
    $servername = "localhost";
    $username = "u253306330_curvity";
    $password = "curvity";
    $dbname = "u253306330_curvity";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
        exit();
    }
    return $conn;
}

//Indicamos el tipo de archivo que se generara
header('Content-Type: application/json');
session_start();

//Nos conectamos a la base de datos
$c=conectar();
mysqli_set_charset($c,"utf8");

// Indicamos nuestra query
$consulta=$c->query("SELECT * FROM Empresa");
 

//En caso de error en la consulta nos muestra el perro error
if(!$consulta){
    die("Error en la consulta SQL");
}

//Metemos todo en un array
while($sql=$consulta->fetch_assoc()){
    $sqlArray["data"][]=$sql;    
}

$mostrarJSON=false; // true: mostrará los datos JSON en php | false: guardará el fichero json en un fichero .json 
if($mostrarJSON){
    echo json_encode($sqlArray);
}else{
    $listaTiendas = "../json/listaEmpresa.json";
    $data = json_encode($sqlArray); 
    
    // Ojo, deberemos de tener creada la carpeta 'json'
    if ($fp = fopen($listaEmpleos, "w")){
    fwrite($fp, $data);
    }
    fclose($fp);
}