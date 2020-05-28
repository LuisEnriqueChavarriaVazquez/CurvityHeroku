<?php
require('claseDB.php');
if (isset($_POST['username_Asp'])) {
     $correoEntrada=$_POST["username_Asp"];
     $contraEntrada=$_POST["password_Asp"];
     $objetoConexion=new objetoConexionBaseDatos();
     if($objetoConexion-> comprobarConexion()==TRUE){
         if($objetoConexion->comprobarExistenciaElementoAtibuto("Aspirante","CorreoElec",$correoEntrada)==TRUE){
            if($objetoConexion->comprobarExistenciaElementoAtibuto("Aspirante","Contra",$contraEntrada)==TRUE){
               header("Location:index_asp.php");
               exit;
              
            }else{
               echo  "<div class=´errors_box´><p class='errors'>" . "Contraseña no coincide ". "</p></div>";
            }
         }else{
          echo  "<div class=´errors_box´><p class='errors'>" . "Correo no  coincide" . "</p></div>";
         }
     }else{
          echo  "<div class=´errors_box´><p class='errors'>" . "Error de conexion" . "</p></div>";
          
     }


}
 
?>