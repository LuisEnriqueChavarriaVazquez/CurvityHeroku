<?php
require('claseDB.php');

if (isset($_POST['submit'])) {
     $nombreEntr=$_POST["username_emp"];
     $contra=$_POST["username_emp"];
     $objetoConexion=new objetoConexionBaseDatos();
     if($objetoConexion-> comprobarConexion()==TRUE){

     }else{
          $estadoNombre="Error de conexion";
          $estadoContra="Error de conexion";
          
     }


}

?>