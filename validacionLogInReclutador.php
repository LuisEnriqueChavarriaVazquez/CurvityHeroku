<?php
require('claseDB.php');

if (isset($_POST['submit'])) {
     $correoEntrada=$_POST["entradaReclutador"];
     $contraEntrada=$_POST["passwordReclutador"];
     echo  "<p class='errors'>" . "Correo no  coincide" . "</p>";
     $objetoConexion=new objetoConexionBaseDatos();

    /* if($objetoConexion-> comprobarConexion()==TRUE){
         if($objetoConexion-> comprobarExistenciaElementoAtibuto("Empresa","CorreoElecReclutador",$correoEntrada)==TRUE){
          echo  "<div class=´errors_box´><p class='errors'>" . "Correo no  coincide" . "</p></div>";
         }else{
          echo  "<div class=´errors_box´><p class='errors'>" . "Correo no  coincide" . "</p></div>";
         }
     }else{
          echo  "<div class=´errors_box´><p class='errors'>" . "Error de conexion" . "</p></div>";
          
     }*/


}

?>