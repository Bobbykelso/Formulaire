<?php
//Nettoyage
$data = array_map('trim', $_POST);
//Variables
$nom = $data['nom'];
$prenom = $data['prenom'];
$email = $data['email'];
$telephone = $data['telephone'];
$message = $data['message'];
$errors = [];
//Validation, Erreurs
if (!empty($errors)) {
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
 } else {
    header('Location: /thanks.php');
 }
 


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="thanks.php" method="post">
        <div class="mb-3">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
        </div>
        <div class="mb-3">
            <label for="prenom">Prènom :</label>
            <input type="text" id="prenom" name="prenom" required>
        </div>
        <div class="mb-3">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="sujet">Sujets :</label>
            <select id="sujet" name="sujet" required>
                <option value="vol">Vol</option>
                <option value="casse">Casse du téléphone</option>
                <option value="detruit">J'ai detruit accidentellement mon téléphone</option>
                <option value="autre" selected>Autre</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="telephone">Télephone :</label>
            <input type="tel" id="telephone" name="telephone" required>
        </div>
        <div class="mb-3">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="20" cols="30" required></textarea>
        </div>
        <div class="button" class="mb-3">
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</body>

</html>