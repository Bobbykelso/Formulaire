
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
            <input type="text" id="nom" name="nom">
        </div>
        <div class="mb-3">
            <label for="prenom">Prènom :</label>
            <input type="text" id="prenom" name="prenom">
        </div>
        <div class="mb-3">
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="email">
        </div>
        <div class="mb-3">
            <label for="sujet">Sujets :</label>
            <select id="sujet" name="sujet">
                <option value="vol" selected>Vol</option>
                <option value="casse">Casse du téléphone</option>
                <option value="perdu">J'ai perdu mon téléphone</option>
                <option value="détruit">J'ai detruit accidentellement mon téléphone</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="telephone">Télephone :</label>
            <input type="tel" id="telephone" name="telephone">
        </div>
        <div class="mb-3">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="20" cols="30"></textarea>
        </div>
        <div class="button" class="mb-3">
            <button type="submit">Enregistrer</button>
        </div>
    </form>
</body>

</html>