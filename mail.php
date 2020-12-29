<?php $nom = $_POST['nom'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent = "From : $nom \n Message: $message";
$recipient = "ramedjahed@yahoo.com";
$sujet = $_POST["sujet"];
$mailheader = "From: $email \r\n";
mail($recipient, $sujet, $message, $formcontent, $mailheader) or die("Error !");
echo "Thank you !";
?>
