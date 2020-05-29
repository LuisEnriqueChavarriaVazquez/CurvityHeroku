<!--Menu del sidenav-->
<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';
if(isset($_SESSION['user'])){
    $user->setUser($userSession->getCurrentUser());
    $dato=$user->getNombre();
}

$userSession = new UserSession();
$user = new User();
?>
<ul id="slide-out" class="sidenav colorContrast">
    <li>
        <div class="user-view">
            <div class="background sideNavFont">

            </div>
            <a href="#user"><img class="circle hoverable" src="pictures/logo.png"><?php echo $dato ?></a>
            <a href="#name"><span class="white-text name">Curvity</span></a>
            <a href="#email"><span class="white-text email">Version 1.0.0</span></a>
        </div>
    </li>
    <li><a href="editarPerfilAspirante.php" class="textColor"><i class="material-icons">account_circle</i>Editar perfil.</a></li>
    <li><a href="consultarEstadoDeSolicitud.php" class="textColor"><i class="material-icons">hearing</i>Lista de ofertas enviadas.</a></li>
    <li><a href="includes/logout.php" class="textColor"><i class="material-icons">directions_run</i>Cerrar sesi&oacute;n.</a></li>
</ul>


<!--Aqui tenemos nuestro navbar-->
<nav class="nav-extended  light-blue darken-4 stickyNavbar">
    <div class="nav-wrapper">
        <a href="#" data-target="slide-out" class="sidenav-trigger" ><i class="material-icons">menu</i></a>
        <p class="textNavbar">Pagina principal.</p>
    </div>
    


