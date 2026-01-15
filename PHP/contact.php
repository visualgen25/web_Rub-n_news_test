<?php
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
  exit;
}

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);
$newsletter = isset($_POST["newsletter"]) ? "Sí" : "No";

$to = "TU_EMAIL@EMPRESA.COM";
$subject = "Nuevo mensaje de contacto";
$body = "
Nombre: $name
Email: $email
Newsletter: $newsletter

Mensaje:
$message
";

$headers = "From: $email";

mail($to, $subject, $body, $headers);
?>
