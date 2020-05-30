<?php
    if (
        isset($_GET["IDSede"])
        & isset($_GET["IDEmpresa"])
        & isset($_GET["IDAspirante"])
        ){
            $IDSede = $_GET["IDSede"];
            $IDEmpresa = $_GET["IDEmpresa"];
            $IDAspirante = $_GET["IDAspirante"];
        }
        
        $servername = "localhost";
        $username = "u253306330_curvity";
        $password = "curvity";
        $dbname = "u253306330_curvity";
        
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        //Recabar los datos de aspirantes
        $queryDatosMatching = "SELECT IDAspirante FROM Matching WHERE IDSede = '$IDSede' AND IDEmpresa = '$IDEmpresa' AND ISApirante = '$IDAspirante"; 
        $resultMatching = mysqli_query($conn,$queryDatosMatching);
        $IDAspiranteSelecto;
        while($rowAspirantesSelectos = $resultMatching->fetch_assoc()) {
            $IDAspiranteSelecto = $rowAspirantesSelectos['IDAspirante']; 
            echo "print";
        }
        
        
        
        $queryDatosAspirante = "SELECT * FROM Aspirante WHERE IDAspirante = '$IDAspiranteSelecto'";
        $resultAsp = mysqli_query($conn, $queryDatosPuesto);
        while($rowAsp = $resultAsp->fetch_assoc()) {
            echo $rowAsp['Nombre'];
            include "
            <div class='margin-down-bigger elementoSwipePadre'>
            <div class='wrapper'>
            <div class='idDisplay z-depth-4'>IPNEMAPDDANSD</div>
            <div class='clash-card empleado'>
            <div class='clash-card__image clash-card__image--empleado'>
            <img src='pictures/personas/pedro.jpg' class='card_image_empleado'>
            </div>
            <div class='buttonContainerEvaluate z-depth-3'>
            <div onclick='M.toast({html: 'Aspirante aceptado'});'  class='aceptaButton green lighten-4 btn buttonEvaluate waves-effect waves-green'><img src='icons/check.svg'></div>
            <div onclick='M.toast({html: 'Aspirante rechazado'});' class='rechazaButton red lighten-4 btn buttonEvaluate waves-effect waves-red'><img src='icons/cross.svg'></div>
            <div onclick='M.toast({html: 'Cambios desechos'});' class='rehacerButton grey lighten-2 buttonHide btn buttonEvaluate waves-effect waves-light'><img src='icons/undo.svg'></div>
            </div>
            <section class='contentDescription'>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Nombre.</div>
            <p class='flow-text'>Pedro Martinez Juarez.</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Experiencia laboral.</div>
            <p class='small_text_summary'>Lorem ipsum dciduntdunt Lorem em ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Sueldo deseado.</div>
            <p class='flow-text'>$10,000.</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Dirección actual.</div>
            <p class='small_text_summary'>Lorem ir sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Idiomas que domina.</div>
            <p class='small_text_summary'>(4) Ingles,Frances,Chino y Alemán.</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Nivel académico.</div>
            <p class='flow-text'>Universidad.</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Habilidades adicionales.</div>
            <p class='small_text_summary'>Lorem ipsum dciduntdunt Lorem em ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt Lorem ipsum dolor sit. Totam ipsum voluptatem eveniet inventore quis est, perspiciatis incidunt</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Correo electrónico.</div>
            <p class='flow-text'>correo@gmail.com.</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Número telefónico.</div>
            <p class='flow-text'>5545678932</p>
            </div>
            <div class='clash-card__unit-description black-text left-align'>
            <div class='clash-card__unit-name truncate'>Redes sociales.</div>
            <p class='small_text_social_media'>Facebook:<span class='small_text_social_media_name'> Name_social_media</span></p>
            <p class='small_text_social_media'>Twitter:<span class='small_text_social_media_name'> Name_social_media</span></p>
            <p class='small_text_social_media last_social_media'>Skype:<span class='small_text_social_media_name'> Name_social_media</span></p>
            </div>
            </section>
            </div> <!-- end clash-card empleado-->
            </div> <!-- end wrapper -->
            </div>
            ";
        }