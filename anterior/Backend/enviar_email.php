
<?php
require 'PHPMailer/PHPMailerAutoload.php';
function enviar_email($correo, $codigo, $nombre){
  try {
  // admin@ifilac.net
  // Cdesarrollo2017!
  $mail = new PHPMailer(true);
  ob_start();
  $mail->IsSMTP();
  $mail->CharSet = 'UTF-8';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls";
  $mail->Host = 'smtp.gmail.com';
  $mail->Username  = "womenit.uaq@gmail.com";
  $mail->Password = "centroDesarrollo2018";
  // $mail->Username = "pruebantendamonos@gmail.com";
  // $mail->Password = "Ntendamonosprueba17";
  $mail->Port = 587;
  $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
  $mail->From = $correo;
  $mail->FromName = "WomenIT Facultad de Informática";
  $mail->AddAddress($correo);
  $mail->AddEmbeddedImage("../img/women.png", "logo");
  $mail->Subject = "Codigo de confirmación de asistencia";
  $body  = "<div>
              <div>
                <img style='margin-left:20%; margin-top:20px; width:60%;' src='cid:logo' alt='logo'>
              </div>
              <div style= 'flex-direction:column; text-align:center; justify-content:center;'>
                <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.8); font-weight:lighter !important;'>Hola, {$nombre}:</h1>
                <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.8); font-weight:lighter !important;'>GRACIAS POR REGISTRARTE</h1>
                <h2 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.7); font-weight:lighter !important;'>El evento se llevará a cabo el día 15 de Marzo de 2018 a partir de las 8:30 a.m.
                <br>en el centro de negocios de la UAQ</h2>
                <h3 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.6); font-weight:lighter !important;'>Av. de las Ciencias S/N Juriquilla, Qro.</h3>
                <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.7); font-weight:lighter; margin-top:30px; margin-bottom:0px;'>Código de confirmación:</h1>
                <h1 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,255,.8); font-weight:lighter;'>{$codigo}</h1>
                <h4 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.6); font-weight:lighter !important;'>Este código se deberá presentar para acceder al evento.</h4>
                <h4 style='font-family: 'Raleway', sans-serif; color:rgba(0,0,0,.5); font-weight:lighter !important;'> NOTA: Cualquier duda, aclaración o inconveniente,
                <br> favor de comunicarte al teléfono 192 12 00 ext. 5911 o envíanos un correo de respuesta,
                <br> para darle solución de manera inmediata.</h4>
              </div>
            </div>";
  $mail->Body = $body;
  $mail->IsHTML(true);
  if ($mail->Send()) {
    return "Correo Enviado";
  } else {
    return "Falló";
  }
  } catch(Exception $e) {
      echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  }
}

function generateRandomString($length = 10) {
  return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}
?>
