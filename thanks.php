<?php
//Nettoyage
$data = array_map('trim', $_POST);
//Variables
$nom = $data['nom'];
$prenom = $data['prenom'];
$email = $data['email'];
$telephone = $data['telephone'];
$message = $data['message'];
$sujet = $data ['sujet'];
$errors = [];

//Validation, Erreurs

    if (empty($prenom)) {
        $errors[] = 'Le prénom est requis';
     }
     if (empty($nom)) {
        $errors[] = 'Le nom est requis';
     }
     if (empty($email)) {
        $errors[] = 'Le mail est requis';
     }
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors[] = "L'adresse mail n’est pas au bon format.";
      }
      
     if (empty($telephone)) {
        $errors[] = 'Le numéro de téléphone est requis';
     }
     if (empty($message)) {
        $errors[] = 'Le message est requis';
     }                         

     if (!empty($errors)) {
        for($i=0;$i< count($errors);$i++) {
          echo $errors[$i]. "<br>";
        }
      } else {
        echo "<br>Merci $prenom $nom de nous avoir contacté à propros de $sujet </br>" ;
        echo "<br>Un de nos conseiller vous contactera soit à l'adresse $email ou par téléphone au $telephone dans les plus brefs délais pour traiter votre demande : </br>";
        echo "<br>$message.</br>";
      }
?>