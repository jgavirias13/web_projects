<?php

header("Content-type: text/html;charset=\"utf-8\"");
$emailTo = "jgavirias13@gmail.com";
$subject = "Prueba email from php";
$body = "Esta es la prueba de un email en php";
$header = "From: jgaviria@hotmail.com";

$response = mail($emailTo, $subject, $body, $header);
if($response == true){
    echo "El mensaje ha sido enviado con exito";
}else{
    echo "Hubo un error al enviar el mensaje";
}

?>