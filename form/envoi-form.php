<?php

$destinataire = 'petitgenetphilippe@yahoo.fr';
$objet .= "\n" . 'demande de renseignement contact-epirplongee.com';


$headers = 'from: ' . $_POST['expediteur'] ."\n";
$headers .= 'Bcc: ' . $_POST['expediteur'] ."\n";
$headers .= 'Content-Type: text/plain; charset="UTF-8"'."\n";
$headers .= 'Content-Transfer-Encoding: 8bit';


$message .= "\n" . 'nom : ' . $_POST['nom'];
$message .= "\n" . 'prenom : ' . $_POST['prenom'];
$message .= "\n" . 'expediteur : ' . $_POST['expediteur'];
$message .= "\n" . 'telephone : ' . $_POST['tel'];
$message .= "\n" . 'message : ' . $_POST['message'];


if(mail($destinataire,$objet,$message,$headers))
	{ ?>
<h1 class="red">votre message est bien parti ! Merci !</h1>
<?php }
else
	{ ?>
<h1>OooOOOuups !! D�sol� mais une erreur a emp�ch� le formulaire d'�tre envoy� ! Votre message n'a pas �t� pas prise en compte, merci de bien vouloir remplir le formulaire � nouveau .</h1>
<?php }

?>