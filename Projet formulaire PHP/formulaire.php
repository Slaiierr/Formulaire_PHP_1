<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulaire</title>
</head>
<body>
    <form method="post" action="page.php">
        <p><em>Informations à remplir obligatoirement </em><span id="asterisque_rouge">✱</span>
        <br><br>
        <h2>Informations personnelles :</h2>
        <br>

        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom">
        <span id="asterisque_rouge">✱</span>
        <br><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom">
        <span id="asterisque_rouge">✱</span>
        <br><br>

        <label for="classe">Votre classe :</label>
        <select name="classe" id="classe">
            <option value="2nd">2nd</option>
            <option value="3eme">3ème</option>
            <option value="4eme">4ème</option>
            <option value="5eme">5ème</option>
            <option value="6eme">6ème</option>
        </select>
        <span id="asterisque_rouge">✱</span>
        <br><br>

        <label for="experience">Avez-vous une expérience dans le monde de la programmation ?</label>
        <select name="experience" id="experience">
            <option value="confirmé">Je connais très bien, je code déjà</option>
            <option value="intermédiaire">Je connais un peu et j'ai déjà essayé de programmer quelque(s) chose(s)</option>
            <option value="débutant">J'en ai déjà entendu parler mais je n'ai jamais essayé</option>
            <option value="découverte">Non, je ne connais pas du tout la programmation/option>
        </select>
        <span id="asterisque_rouge">✱</span>
        <br><br>

        <label for="pays">Dans quel pays vivez-vous ?</label>
        <select name="nationnalite" id="nationnalite">
            <option value="france">France</option>
            <option value="espagne">Espagne</option>
            <option value="allemagne">Allemagne</option>
            <option value="belgique">Belgique</option>
            <option value="pologne">Pologne</option>
            <option value="angleterre">Angleterre</option>
        </select>
        <br><br>

        <label for="sexe">Sexe :</label>
        <br>
        <input type="radio" name="sexe" value="1" id="choix1">
        <label for="choix1">Femme</label>
        <input type="radio" name="sexe" value="2" id="choix2">
        <label for="choix2">Homme</label>
        <span id="asterisque_rouge">✱</span>
        <br><br><br>


        <h2>Ce que vous attendez :</h2>
        <br>

        <label for="classe_integrer">Quelle classe souhaitez vous intégrer ?</label>
        <select name="classe_integrer" id="classe_integrer">
            <option value="1ere">1ère</option>
            <option value="terminale">Terminale</option>
        </select>
        <span id="asterisque_rouge">✱</span>
        <br><br>

        <label for="questions">Avez-vous des questions à nous poser ?</label>
        <input type="text" name="questions" id="questions">
        <br><br>

        <label for="email">Veuillez renseigner votre mail :</label>
        <input type="email" name="email" id="email"><span id="asterisque_rouge">✱</span>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" id="mdp"><span id="asterisque_rouge">✱</span>
        <br><br>

        <button type="submit" id="envoie">Envoyer</button>
    </form>
</body>
</html>
