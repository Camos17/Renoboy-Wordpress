<?php
/* Template Name: ClientMailer */
?>

<?php

    require "phpmailer/class.phpmailer.php";

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $asunto = strip_tags(trim($_POST["asunto"]));
                $asunto = str_replace(array("\r","\n"),array(" "," "),$asunto);
        $razonsocial = strip_tags(trim($_POST["razonsocial"]));
				$razonsocial = str_replace(array("\r","\n"),array(" "," "),$razonsocial);
        $nombre = strip_tags(trim($_POST["nombre"]));
                $nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
        $ciudad = strip_tags(trim($_POST["ciudad"]));
                $ciudad = str_replace(array("\r","\n"),array(" "," "),$ciudad);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $telefono = strip_tags(trim($_POST["telefono"]));
                $phone = str_replace(array("\r","\n"),array(" "," "),$phone);
        $mensaje = trim($_POST["mensaje"]);

        // Check that data was sent to the mailer.
        if ( empty($razonsocial) OR empty($nombre) OR empty($ciudad) OR empty($mensaje) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo "Oooops! Algo ha sucedido y no hemos podido enviar tu mensaje. Por favor completa el formulario y vuelve a intentarlo.";
            exit;
        }

        if( empty($asunto) ){
            $asunto = 'Contacto Cliente / Distribuidor';
        }

        
        // Set the email subject.
        $subject = "$asunto";

        // Build the email content.
        $email_content = "<strong>Asunto:</strong> $asunto\n <br>";
        $email_content = "<strong>Razón Social:</strong> $razonsocial\n <br>";
        $email_content = "<strong>Nombre:</strong> $nombre\n <br>";
        $email_content .= "<strong>Ciudad:</strong> $ciudad\n\n <br>";
        $email_content .= "<strong>Email:</strong> $email\n\n <br>";
        $email_content .= "<strong>Teléfono:</strong> $telefono\n\n <br>";
        $email_content .= "<strong>Mensaje:</strong> \n$mensaje\n <br>";

        // Build the email headers.
        $email_headers = "From: $nombre <$email>";

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";      // Connect using a TLS connection  
        
        //$mail->Host = "smtp.gmail.com";  //Gmail SMTP server address
        //$mail->Port = 587;  //Gmail SMTP port
        //$mail->Encoding = '7bit';
        // Authentication  
        //$mail->Username   = "xxx@gmail.com"; // Your full Gmail address
        //$mail->Password   = "xxx"; // Your Gmail password
        
        $mail->Host = "smtp.postmarkapp.com";
        $mail->Port = 587;  
        $mail->SMTPDebug = 1;     
        $mail->Username = "c0e6d64d-1707-4489-b606-756c77d33633";
        $mail->Password = "c0e6d64d-1707-4489-b606-756c77d33633";
        
       /* $mail->Host = "smtp.mailgun.org";
        $mail->SMTPDebug = 1;     
        $mail->Username = "postmaster@app06e91b1fd56142ed9f972b3ac924ae69.mailgun.org";
        $mail->Password = "1d5943083da97469eb4ef4b88cf035bf";*/

        
        $mail->SetFrom($email, $name);
        $mail->Subject = 'Contacto';
        $mail->MsgHTML($email_content);
        $mail->AddAddress('jdavid@cannedhead.com', 'Contacto');

        $result = $mail->Send(); 
        if($result) {
           http_response_code(200);
           echo "Gracias! Tu mensaje ha sido enviado.";
        } else {
           http_response_code(500);
           echo "Oops! Algo ha sucedido y no hemos podido enviar tu mensaje.";
        }

    } else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "Ha habido un problema con el formulario, por favor intentalo de nuevo.";
    }

?>