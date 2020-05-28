<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
$userSession = new UserSession();
$user = new User();
if(isset($_SESSION['user'])){
  $user->setUser($userSession->getCurrentUser());
  include_once 'operacionesAspirante.php';
}else{
  include_once 'index_asp.php'
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