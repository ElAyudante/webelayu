<?php
$name = $_POST['name'];
$lastname = $_POST['lastname'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'juanma@elayudante.es';
$title = 'FENOMENAL';
$header = 'From: ' . $email;
$msgEmail = "Nombre: $name\n E-Mail: $email\n Mensaje:\n $message";

if($_POST['submit']) {
    if (mail($to, $title, $msgEmail, $header)) {
        echo "<script languague='javascript'>
              alert('Mensaje enviado, muchas gracias.');
              window.location.ref = 'http://localhost/webelayu/info.php';
              </script>";
    } else {
        echo 'Fallo de envío';
    }
}
?>