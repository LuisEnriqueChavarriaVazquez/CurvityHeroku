<?php
	$servername = "localhost";
    $username = "u253306330_curvity";
  	$password = "curvity";
  	$dbname = "u253306330_curvity";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }

    $salida = "";

    $query = "SELECT * FROM Empresa WHERE Name NOT LIKE '' ORDER By IDEmpresa LIMIT 5";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM Empresa WHERE Nombre LIKE '%$q%'";
    }

    $resultado = $conn->query($query);

    if (1==1) {
    	$salida.="<table border=1 class='tabla_datos'>
    			<thead>
    				<tr id='titulo'>
    					<td>Nombre</td>
    				</tr>

    			</thead>
    			

    	<tbody>";

    	while ($fila = $resultado->fetch_assoc()) {
    		$salida.="<tr>
                        <td>".$fila['Nombre']."</td>
                        <td>"."<img src='data:image/jpeg; base64,".base64_encode($fila['FotoLogo'])."' width='400' height='400'>"."</td>
    				</tr>";

    	}
    	$salida.="</tbody></table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;

    $conn->close();



?>