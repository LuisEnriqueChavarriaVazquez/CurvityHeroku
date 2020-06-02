<?php
$nombre = $_SESSION["user"];
?>

<form action="consultarEstadoDeSolicitud.php" method="GET">
  <div class="fixed-action-btn">
    <?php echo "<a name='submitHear' href='./consultarEstadoDeSolicitud.php?nombreSolicitud=$nombre' class='btn-floating btn-large light-blue darken-3 waves-effect hoverable'>"; ?>
    <i class="large material-icons">hearing</i>
    </a>
  </div>
</form>