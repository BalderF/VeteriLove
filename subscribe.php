<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $to = $email; // Reemplaza con tu dirección de correo de Gmail
        $subject = "Nueva suscripción a la Familia VeteriLove";
        $message = "¡Hola y bienvenido a nuestra comunidad veterinaria!

Estamos encantados de que te hayas suscrito y formes parte de nuestra familia de amantes de las mascotas. En nuestra veterinaria, nos apasiona cuidar de tus compañeros peludos con el máximo cariño y profesionalismo. Gracias por confiar en nosotros para el bienestar de tu mascota.

Si tienes alguna pregunta o necesitas asistencia, no dudes en contactarnos. Estamos aquí para ayudarte en todo lo que necesites.

¡Bienvenido y gracias por elegirnos! 🐾";
        $headers = "From: clinicaveterilove@gmail.com"; // Asegúrate de usar un dominio válido

        if (mail($to, $subject, $message, $headers)) {
            echo "Gracias por suscribirte a nuestro apartado de Noticias.";
        } else {
            echo "Lo sentimos, ha ocurrido un error. Inténtalo de nuevo más tarde.";
        }
    } else {
        echo "Por favor, introduce una dirección de correo válida.";
    }
} else {
    echo "Método de solicitud no válido.";
}
?>