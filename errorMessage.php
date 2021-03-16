<?php

var_dump($_POST);


// Test si le formulaire a été envoyé
// if (!empty($_POST) === true) {
    // on test si le tableau est vide
// /!\ on part du principe que l'on a reçu tous les éléments
if (empty($_POST) === false) {


// -------- Prénom

// Tester l'existance de $_POST['prenom']
// if (isset($_POST['prenom']) == true) {
//     // Tester si le prénom est vide
//     if ($_POST['prenom'] == "") {
//         echo 'Veuillez renseigner un prénom';

//     }
// }

// Même test que en haut en une ligne 
if (isset($_POST['prenom']) == true && $_POST['prenom'] == "") {
     $errors[] = 'Veuillez renseigner un prénom.';
}


// -------- Nom

if (isset($_POST['nom']) == true && $_POST['nom'] == "") {
    $errors[] = 'Veuillez renseigner un nom.';
    
}



// -------- Mot de passe


if (isset($_POST['password']) == true && $_POST['password'] == "") {
    $errors[] = 'Veuillez renseigner un mot de passe.';
    
}

// --

// if (isset($_POST['confime_password']) == true && $_POST['confime_password'] != ['password']) {
//     echo '<div class="errorMessage">Les mots de passe ne sont pas similaires</div>';
    
// }


// -------- Mdp supérieur à 3 et comparaison des mdp 

if (strlen($_POST['password']) <3 ) {
    $errors[] = 'Veuillez renseigner un mot de passe de 3 caractères minimum.'; 
} else if ($_POST['password'] != $_POST['confime_password']) {
    $errors[] = 'Les mot de passe ne correspondent pas.'; 
}





// -------- Civilitée

if (isset($_POST['civil']) == true && $_POST['civil'] == "") {
    $errors[] = 'Veuillez renseigner une civilitée.';
    
}


// -------- Date naissance

if (isset($_POST['naissance']) == true && $_POST['naissance'] == "") {
    $errors[] = 'Veuillez renseigner une date de naissance.';
    
}



// -------- Ville

if (isset($_POST['ville']) == true && $_POST['ville'] == "") {
    $errors[] = 'Veuillez renseigner une ville.';
}







// if(['password'] != ['confime_password']){ 
//     echo '<div class="errorMessage">Les mot de passe ne correspondent pas.</div>'; 
// } else {
//     return ;
// } 

// -------- 




}