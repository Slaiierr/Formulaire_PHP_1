<?php
  $nom= htmlspecialchars($_POST["nom"]);
  $prenom= htmlspecialchars($_POST["prenom"]);
  $classe= htmlspecialchars($_POST["classe"]);
  $experience= htmlspecialchars($_POST["experience"]);
  $sexe= htmlspecialchars($_POST["sexe"]);
  $classe_integrer= htmlspecialchars($_POST["classe_integrer"]);
  $email= htmlspecialchars($_POST["email"]);
  $mdp= htmlspecialchars($_POST["mdp"]);

if $nom == "":
    {echo "Vous n'avez pas saisie de nom dans le formulaire."}
?>
<htmllang="fr">
<head>
<metacharset="UTF-8"/>
<link rel="stylesheet" href="style.css">
<title>Formulaire Test</title>
</head>
<body>
    <h1>Bonjour <?php { echo $prenom . "" . $nom ;} ?> te voici ici sur la page de présentation de la spécialité NSI du lycée Foch !</h1>
    <br><br>
    <div class="compte">
        <h2>Nous nous sommes permis de te créer un compte afin de faciliter ta navigation sur notre site.</h2>
        <ul>
            <li>Identifiant : <?php { echo $email; } ?></li>
            <li>Mot de passe : <?php { echo $mdp; } ?></li>
        </ul>
        <p>Cependant, ce mot de passe ne doit être révélé sous <strong>aucun prétexte</strong>. Il te sera utile tout au long de ton année. Ne le perds pas !</p>
    </div>
    <br>
    <div class="concours">
        <h2>Les concours :</h2>
        <p>Tout au long de ton année de <?php { echo $classe_integrer; } ?> il te sera possible d'intégrer des concours.</p>
            <p>Les concours sont organisés sous 4 difficultés. Tu es dans la catégorie '<em><?php { echo $experience; } ?></em>'</p>
            <p>Mais tu es encore en <?php { echo $classe ;} ?> alors, tu as encore un peu de temps pour t'entrainer et peut être passer dans la catégorie supérieure avant d'entrer en <?php {echo $classe_integrer ;} ?> !</p>
    </div>
</body>
