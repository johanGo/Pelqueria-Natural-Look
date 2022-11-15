<?php

if(isset($_POST['enviar'])){
    if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['mensaje'])){

        $nombre= $_POST['nombre'];
        $correo= $_POST['correo'];
        $mensaje= $_POST['mensaje'];
        $header= "FROM: noreplay@example.com" . "\r\n";
        $header.= "Reply-To: noreplay@example.com" . "\r\n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail= @mail($nombre,$correo,$mensaje);
        if($mail){
            echo "<h4> mail enviado sucessful</h4>";
        }else{
            echo "<h5> Mail no enviado errorrrr</h5>";
        }
    }
}

