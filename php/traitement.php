<?php

// Récupération de PHPMailer

require 'PHPMailer/PHPMailerAutoload.php';

//Correspond au nom du bouton d'envoi (submit)

if (isset($_POST['send-form'])){

  // Conversion des champs de formulaire en variables
  $nom = strip_tags(htmlspecialchars($_POST['formname']));
  $email_address = strip_tags(htmlspecialchars($_POST['formmail']));
  $message = strip_tags(htmlspecialchars($_POST['formmessage']));
  $prenom = "prenom";
  $sexe = "sexe";
  $sujet = "sujet";


  // console.log('variables:'.$nom.$email_address.$message);

// Traitement des données récupérées

$email = new PHPMailer();
$email->IsHTML(true);
$email->CharSet = 'UTF-8';
$email->From      = 'contact@barber-club.fr';
$email->FromName  = 'Fomulaire de contact The Barber Club';
$email->Subject   = '[Formulaire de contact] : '.$nom;
$email->Body      = 'Vous avez reçu un message de  '.$nom.' <br /><br /><strong>Email :</strong> '.$email_address.'<br /><strong>Message : </strong>'.$message;
$email->AddAddress( 'carlindusdesign@gmail.com' );

  header("Location: https://www.carlindusdesign.fr/barber-club/php/message.html");

  return $email->Send();

}
else{
  echo "pas de message" ;
}
?>
