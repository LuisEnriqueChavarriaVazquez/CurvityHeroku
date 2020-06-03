<?php
if (isset($_POST['submit'])) {
    $email_aspirante_envio_solicitud = ($_POST['email_aspirante_envio_solicitud']);
    $pass_aspirante_envio_solicitud = ($_POST['pass_aspirante_envio_solicitud']);

//Obtenemos los valores de 3 IDs
$queryIds = "SELECT * FROM Puesto WHERE IDPuesto = '$IDPuesto'";
$resultsIds = mysqli_query($conn,$queryIds);
$idDinamicaSede;
$idDinamicaPuesto;
$idDinamicaEmpresa;
while ($row = $resultsIds->fetch_assoc()) {
    $idDinamicaSede = $row['IDSede'];
    $idDinamicaPuesto = $row['IDPuesto'];
    $idDinamicaEmpresa = $row['IDEmpresa'];
}

$queryAspirante = "SELECT * FROM Aspirante WHERE CorreoElec = '$email_aspirante_envio_solicitud' AND Contra = '$pass_aspirante_envio_solicitud'";
$resultApirante = mysqli_query($conn,$queryAspirante);
$idDinamicaAspirante;
while ($rowSede = $resultApirante->fetch_assoc()) {
    $idDinamicaAspirante = $rowSede['IDAspirante'];
}

$query = "INSERT INTO Matching(IDAspirante,IDPuesto,IDSede,IDEmpresa, Situacion) VALUES ('$idDinamicaAspirante','$idDinamicaPuesto','$idDinamicaSede', '$idDinamicaEmpresa','En revisión')";
if ($conn->query($query) === true) {
    echo  "<div class=´errors_box´><p class='success'>Solicitud enviada.</p></div>";
} else {
    echo  "<div class=´errors_box´>
    <p class='errors'>" . "Error, ingresa bien tus datos o la solicitud ya ha sido enviada." . "</p>
    </div>";
}

}
