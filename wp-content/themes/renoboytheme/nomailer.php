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
        $nombre = strip_tags(trim($_POST["nombre"]));
                $nombre = str_replace(array("\r","\n"),array(" "," "),$nombre);
        $apellido = strip_tags(trim($_POST["apellido"]));
                $apellido = str_replace(array("\r","\n"),array(" "," "),$apellido);
        $empresa = strip_tags(trim($_POST["empresa"]));
                $empresa = str_replace(array("\r","\n"),array(" "," "),$empresa);   
        $direccion = strip_tags(trim($_POST["direccion"]));
                $direccion = str_replace(array("\r","\n"),array(" "," "),$direccion);   
        $ciudad = strip_tags(trim($_POST["ciudad"]));
                $ciudad = str_replace(array("\r","\n"),array(" "," "),$ciudad);  
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $telefono = strip_tags(trim($_POST["telefono"]));
                $telefono = str_replace(array("\r","\n"),array(" "," "),$telefono);
        $numvehiculos = strip_tags(trim($_POST["numvehiculos"]));
                $numvehiculos = str_replace(array("\r","\n"),array(" "," "),$numvehiculos);
        $tipovehiculos = strip_tags(trim($_POST["tipovehiculos"]));
                $tipovehiculos = str_replace(array("\r","\n"),array(" "," "),$tipovehiculos);       
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
        $email_content .= "<strong>Razón Social:</strong> $razonsocial\n <br>";
        $email_content .= "<strong>Nombre:</strong> $nombre\n <br>";
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
        
        
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 587;  
        $mail->SMTPDebug = 1;     
        $mail->Username = "marketing@renoboy.com";
        $mail->Password = "Abc12345*";
                
        $mail->SetFrom($email, $name);
        $mail->Subject = 'Contacto';
        $mail->MsgHTML($email_content);
        $mail->AddAddress('jdavid@cannedhead.com', 'Contacto');

        if($asunto == 'Comprar reencauche' OR $asunto == 'Promociones vigentes' OR $asunto == 'Publicidad y Patrocinio' ){
            $mail->AddAddress('jd.florez39@gmail.com', 'Contacto');
        }

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