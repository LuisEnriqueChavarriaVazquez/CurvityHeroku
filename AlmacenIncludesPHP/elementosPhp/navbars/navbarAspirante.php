<!--Menu del sidenav-->
<?php
include_once 'includes/user.php';
?>
<ul id="slide-out" class="sidenav colorContrast">
    <li>
        <div class="user-view">
            <div class="background sideNavFont">

            </div>
            <a href="#user"><img class="circle hoverable" src="pictures/logo.png"></a>
            <a href="#name"><span class="white-text name"><?php echo $user->getNombre();?></span></a>
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
    <div class="nav-content">
        <div class="nav-wrapper">
            <form>
                <div class="input-field">
                    <input id="search" class="input-search" name="busca" type="search" required autocomplete="off">
                    <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                </div>
                <div style="display: flex; align-items:center; justify-content:center"><button class="btn white blue-text" name="submit">Buscar</button></div>
            </form>
        </div>
    </div>


