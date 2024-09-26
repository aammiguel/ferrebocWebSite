<?php

	$to = "ventasenlinea@ferreboc.com"; // this is your Email address
	$from  = $_POST['email']; // this is the sender's Email address
	$sender_name = $_POST['name'];
	$phone = $_POST['phone'];
	$subject = $_POST['subject'];
	$note = $_POST['note'];

	$subject = "Form submission";

	$message = $sender_name . " ha enviado el siguiente mensaje. El asunto de contacto es " .  $subject . "  su número de teléfono es " . $phone . ".  El mensaje es el siguiente: ". "\n\n" . $note;

	$headers = 'From: ' . $from;
	mail($to, $subject, $message, $headers);
	if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente.";
    } else {
        echo "Hubo un error al enviar el correo.";
    }



?> 
