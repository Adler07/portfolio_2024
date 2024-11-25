<?php
$firstname = $_POST['firstName'];
$name = $_POST['lastName'];
$email = $_POST['email'];
$message = $_POST['message'];

// Recipient email address
$to = 'robotnucleaire@gmail.com';  // Replace with your actual email

// Subject of the email
$subject = 'Votre réservation';

// Message body
$body = "
Firstname: $firstname
Name: $name
Email: $email
Message: $message
";

// Send email
$headers = "From: $email";
if (mail($to, $subject, $body, $headers)) {
  echo "Réservation envoyée avec succès!";
} else {
  echo "Erreur lors de l'envoi de la réservation. Vérifiez les erreurs PHP.";  // Display a more informative message
}?>