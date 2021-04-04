<?php
$data = array_map('trim', $_POST);
$nom = $data['nom'];
$prenom = $data['prenom'];
$email = $data['email'];
$telephone = $data['telephone'];
$message = $data['message'];
$sujet = $data ['sujet'];


echo "<br>Merci $prenom $nom de nous avoir contacté à propros de $sujet </br>" ;
echo "<br>Un de nos conseiller vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande : </br>";
echo "<br>$message.</br>"
?>