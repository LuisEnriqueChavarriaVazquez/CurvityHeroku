<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
?>
<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteSuperior.php' ?>
<?php include 'AlmacenIncludesPHP/elementosPhp/navbars/navbarAspirante.php' ?>

<section class="principal">

  <!--<div class="formulario">
    <label for="caja_busqueda">Buscar</label>
    <input type="search" name="caja_busqueda" id="caja_busqueda"></input>
  </div>-->

  <div class="nav-content">
        <div class="nav-wrapper">
            <form>
                <div class="input-field">
                    <input id="search caja_busqueda" class="input-search" name="caja_busqueda" type="search" autocomplete="off">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                </div>
              </form>
        </div>
    </div>

</section>
</nav>

<!--Cuerpo de las secciones-->
<br><br><br><br><br><br><br><br>
<div class="boxSubjectsBrowser full-height backgroundInicioAspirante blue-grey lighten-5">

  <div id="datos" class="row">

  </div>

  <div class="row">
    <div class="col s6 m6 borderCardInicio">
      <a href="operacionesAspirante.php">
        <div class="card borderCardInicio waves-effect">
          <div class="card-image">
            <img class="roundPictures" src="https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
          </div>
          <div class="card-content">
            <p class="flow-text noLinkStyle">Empresa</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col s6 m6 borderCardInicio">
      <a href="operacionesAspirante.php">
        <div class="card borderCardInicio waves-effect">
          <div class="card-image">
            <img class="roundPictures" src="https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
          </div>
          <div class="card-content">
            <p class="flow-text noLinkStyle">Empresa</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col s6 m6 borderCardInicio">
      <a href="operacionesAspirante.php">
        <div class="card borderCardInicio waves-effect">
          <div class="card-image">
            <img class="roundPictures" src="https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
          </div>
          <div class="card-content">
            <p class="flow-text noLinkStyle">Empresa</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col s6 m6 borderCardInicio">
      <a href="operacionesAspirante.php">
        <div class="card borderCardInicio waves-effect">
          <div class="card-image">
            <img class="roundPictures" src="https://images.unsplash.com/photo-1476231682828-37e571bc172f?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60">
          </div>
          <div class="card-content">
            <p class="flow-text noLinkStyle">Empresa</p>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>

<?php include("logicaOperacionesAspirante/buscador.php"); ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/floatingButtons/botonHearing.php' ?>

<?php include 'AlmacenIncludesPHP/elementosPhp/HTMLSTRUCTURE/parteInferior.php' ?>