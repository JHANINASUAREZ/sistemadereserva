<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';
$contraBD="";
if(!empty($_POST['correoconf'])){
    $correorec=$_POST['correconf'];
    if(consul_correo_admin($correorec)){
        $mail = new PHPMailer(true);

            try {//se usara outlock
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'sparkcodetecnology@gmail.com';                     //SMTP username
                $mail->Password   = 'sparkcode100%';                               //SMTP password
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('sparkcodetecnology@gmail.com', 'Sparkcode');
                $mail->addAddress('$correorec', 'usuario prueba');     //Add a recipient

                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'RECUPERACION DE CONTRASEÑA';
                $mail->Body    = 'este es el cuerpo <b>in bold!</b>';
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }

    }
}else{
    //estaria vacio el correo
}

 function consul_correo_admin($correorec){
    $query = "SELECT * FROM administrador WHERE correo = '$correorec';";
    $consultaadminisitrador = pg_query(Conneccion(), $query);
    if($consultaadminisitrador){
      if(pg_num_rows($consultaadminisitrador)>0){
        //significa que es un admin
        while ($fila = pg_fetch_assoc($consultaadminisitrador)) {
            $contraBD = $fila['pasword']; 
          }
        return TRUE;
      }
    }else {
      //no es un admin seria un docente
      return consul_correo_docente($correorec);
    }
  
  }
  
  function consul_correo_docente($correorec){//metodo para buscar el correo del usuario en la base de datos
    $query = "SELECT * FROM docente WHERE correo = '$correorec';";
    $consultadocente = pg_query(Conneccion(), $query);
    if($consultadocente){
        if(pg_num_rows($consultadocente)>0){
            //significa que es un docente
            while ($fila = pg_fetch_assoc($consultadocente)) {
                $contraBD = $fila['pasword']; 
              }
            return TRUE;
          }
      }else {
        //no es un docente no existe el usuario
        return FALSE;
      }
}
?>