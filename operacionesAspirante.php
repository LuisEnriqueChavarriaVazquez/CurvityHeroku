<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
require 'includes/db.php';

$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
  $user->setUser($userSession->getCurrentUser());
  $dato=$user->getCorreo();
  $c=new conectar();
  $conexion=$c->conexion();
    
    $sql="SELECT *from aspirante where CorreoElec='$dato'";
    $result=mysqli_query($conexion,$sql);

    $ver=mysqli_fetch_row($result);

    $datos=array(
                    'IDAspirante'=>$ver[0],
                    'Nombre'=>$ver[1],
                    'Contra'=>$ver[2],
                    'ApellidoPat'=> $ver[3],
                    'ApellidoMat'=>$ver[4],
                    'SueldoDeseado'=>$ver[5],
                    'Direccion'=>$ver[6],
                    'Escuela'=>$ver[7],
                    'NivelAcademico'=>$ver[8],
                    'CorreoElec'=>$ver[9],
                    'ResumenExpPrevLab'=>$ver[10],
                    'ResumenHab'=>$ver[11],
                    'numeroIdiomas'=>$ver[12],
                    'detallesIdiomas'=>$ver[13],
                    'FacebookAspirante'=>$ver[14],
                    'SkypeAspirante'=>$ver[15],
                    'TwitterAspirante'=>$ver[16],
                    'FotoPerfil'=>$ver[17]
                );

  include_once 'operacionesAspirante.php';
}
else{
  include_once 'index_asp.php';
}

?>
<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>
<?php include 'AlmacenIncludesPHP/elementosPhp/navbars/navbarAspirante.php' ?>

<div class="nav-content">
  <div class="nav-wrapper">
    <div class="formularioB light-blue darken-4">
      <label for="caja_busqueda"></label>
      <input type="search" name="caja_busqueda" id="caja_busqueda"></input>
    </div>
  </div>
</div>
</nav>

<!--Cuerpo de las secciones-->
<br><br><br><br><br><br><br><br>
<h2><?php echo "$dato" ?></h2>
<div class="boxSubjectsBrowser full-height blue-grey lighten-5" id="fullEmpleosContainer">

  <div id="datos" class="row">

  </div>
</div>

<?php include("logicaOperacionesAspirante/buscador.php"); ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/floatingButtons/botonHearing.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>