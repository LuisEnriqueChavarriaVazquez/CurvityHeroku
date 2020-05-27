<?php
require('claseDB.php');

if (isset($_POST['submit'])) {
     $correoEntrada=$_POST["username_emp"];
     $contraEntrada=$_POST["username_emp"];
     $objetoConexion=new objetoConexionBaseDatos();
     if($objetoConexion-> comprobarConexion()==TRUE){
         if($objetoConexion-> comprobarExistenciaElementoAtibuto("Empresa","CorreoElecReclutador",$correoEntrada)==TRUE){
             
         }else{
          $estadoCorreo="Correo Invalido";
         }
     }else{
          $estadoCorreo="Error de conexion";
          $estadoContra="Error de conexion";
          
     }


}

?>