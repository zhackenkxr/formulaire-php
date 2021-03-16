<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../img/iia.ico">


    <title>IIA | Formulaire d'inscription</title>
</head>



<body>

<body background="../img/539af9ba14ba1.jpeg">

    <h1>Formulaire d'inscription</h1>

<?php

// ----- Require

require '../errorMessage.php';
require '../messages.php';


// ----- Renvoi des messages d'erreurs

if (isset($errors) === true){
    error($errors);
}


// ----- 

?> 


    <form action="" method="POST">

    <p> <i> Tous les caractères comprennant <span class="etoile">* </span> sont obligatoires.</i> </p>
<!-- required="required" -->
        <div>
            <label for="prenom" class="lbl">Prénom : <span class="etoile">* </span></label>
            <input id="prenom" name="prenom" type="text" />
        </div>

        <div>
            <label for="nom" class="lbl">Nom : <span class="etoile">* </span></label>
            <input id="nom" name="nom" type="text" />
        </div>

        <div>
            <label for="password" class="lbl">Mot de passe : <span class="etoile">* </span></label>
            <input id="password" name="password" type="password"  /> <i>(3 caractères min.)</i>
        </div>
<!-- minlength="3" required -->
        <div>
            <label for="confime_password" class="lbl">Confirmation : <span class="etoile">* </span></label>
            <input id="confime_password" name="confime_password" type="password" />
        </div>

        <div>
            <p>
                <span class="lbl">Civilitée :</span>
                <input type="radio" name="civil" value="mme" /> Madame
                <input type="radio" name="civil" value="mr" /> Monsieur
                <input type="radio" name="civil" value="other" /> Autres
            </p>
        </div>

        <div>
            <label for="ville" class="lbl">Ville : </label> <select id="ville" name="ville">
                <option value="">Choississez</option>
                <option value="ville1">Laval</option>
                <option value="ville2">Angers</option>
                <option value="ville3">Nantes</option>
            </select>
        </div>

        <label for="start" class="lbl">Date de naissance :</label>

        <input type="date" id="naissance" name="naissance" min="1-01-01" max="2018-12-31">


        <div>
            <span class="lbl"> Sport : <i>(optionnel)</i></span>
            <input type="checkbox" id="football" name="sport[]">
            <label for="football">Football</label>

            <input type="checkbox" id="tennis" name="sport[]">
            <label for="tennis">Tennis</label>

            <input type="checkbox" id="handball" name="sport[]">
            <label for="handball">Handball</label>

            <input type="checkbox" id="poney" name="sport[]">
            <label for="poney">Poney</label>

            <input type="checkbox" id="natation" name="sport[]">
            <label for="natation">Natation</label>

            <input type="checkbox" id="golf" name="sport[]">
            <label for="golf">Golf</label>
        </div>



        <div>
            <span class="lbl"> Photo : </span>
            <input type="file" />
        </div>


        <p>
            <span class="lbl"> Description : </span><br />
            <textarea name="le-message" rows="6" cols="40">Vous pouvez saisir ici un message.</textarea>
        </p>



        <p>
            <input type="submit" value="Envoyer" />
            <input type="reset" value="Annuler" />
        </p>


    </form>

</body>

</html>