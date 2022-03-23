<?php

$codePostal = $_POST["codePostal"];
$departement = substr($codePostal, 0, 2);

if(strlen($codePostal) != 5) {
    echo 'Veuillez entrer les 5 chiffres pour le code postal <a href="index.php">Retour</a>';
}else if($departement == "31") {
    echo 'Toulouse';
}else if($departement == "33") {
    echo 'Bordeaux';
}else {
    echo 'Code postal inconnu';
}

