
<?php

//No se cargan aun los datos de las sedes
//$conexion = new mysqli("localhost", "u253306330_curvity", "curvity", "u253306330_curvity"); 

if (isset($_POST['submit'])) {
    $nombre_puesto = $_POST["nombre_puesto"];
    $pago_puesto = $_POST["pago_puesto"];
    $modalidad_puesto = $_POST["modalidad_puesto"];
    $requerimientos_puesto = $_POST["requerimientos_puesto"];
    $prestaciones_puesto = $_POST["prestaciones_puesto"];
    $contadorEleConfimados = 0;
    $errores_oferta = array();

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
  
  
     function validacionSueldo ($StringEntrada){
        if(empty($StringEntrada) || trim($StringEntrada)== ""){
           return False;
        }elseif(!preg_match("/^[0-9]+(.([0-9]+))?$/",$StringEntrada)){
           return False;
        }else{
           return True;
        }
     }

    if (!validacionNormal($nombre_puesto)) {
        array_push($errores_oferta,"Nombre de puesto inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionSueldo($pago_puesto)) {
        array_push($errores_oferta,"Número de pago inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($modalidad_puesto)) {
        array_push($errores_oferta,"Modalidad de puesto invalida");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($requerimientos_puesto)) {
        array_push($errores_oferta,"Requerimiento de puesto inválido");
    } else {
        $contadorEleConfimados++;
    }

    if (!validacionNormal($prestaciones_puesto)) {
        array_push($errores_oferta,"Prestaciones del puesto invalidas");
    } else {
        $contadorEleConfimados++;
    }


    if($contadorEleConfimados == 5){
        echo  "<div class=´errors_box´><p class='success'>"."Oferta creada creada"."</p></div>";
    }else{
        foreach ($errores_oferta as $val) {
            echo  "<div class=´errors_box´><p class='errors'>".$val."</p></div>";
        }
    }

}

?>