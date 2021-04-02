<?php

echo "Merci ". $_POST['prenom'] . " " . $_POST['nom'] . " " . "de nous avoir contacté à propos de" . " " . $_POST['sujet'] . "." . " ";

echo "Un de nos conseiller vous contactera soit à l’adresse" . " " . $_POST['email'] . " " . "ou par téléphone au" . " " . $_POST['telephone'] . " " . "dans les plus brefs délais pour traiter votre demande :" . " ";

echo $_POST['message'];
?>