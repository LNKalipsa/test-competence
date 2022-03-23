<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style.css">

    <title>Annexx</title>
</head>

<body>
    <h1>Réservez votre box en 4 étapes</h1>
    
    <div class="container grid-wrap">
        <div class="card card-1">
            <div class="content">
                <h2>1. Choisissez</h2>
                <p>La taille de box qu'il vous faut avec notre <b>simulateur en ligne.</b> </p>
            </div>
            <img class="" src="img/box.png" alt="Choisissez">
        </div>
        
        <div class="card card-2">
            <div class="content">
                <h2>2. Réservez</h2>
                <p>Le box dans la ville de votre choix en quelques clics</p>
            </div>
            <img class="" id="reserver" src="img/reserver.png" alt="Réservez">
        </div>
        
        <div class="card card-3">
            <div class="content">
                <h2>3. Finalisez</h2>
                <p>Votre contrat à distance avec la location zéro contact</p>
            </div>
            <img class="" src="img/contrat.png" alt="Finalisez">
        </div>
        
        <div class="card card-4">
            <div class="content">
                <h2>4. Déménagez</h2>
                <p>Quand vous le souhaitez.<br/>Besoin de <b>cartons</b> ?</p>
            </div>
            <img class="" src="img/demenager.png" alt="Déménagez">
        </div>
    </div><!--container-->
    
    <div class="container search">
        <form method="POST" action="traitement.php">
            <img class="fleche" src="img/fleche.png" alt="flèche">
            <input name="codePostal" class="form" type="text" placeholder="Ville ou code postal ..."><button type="submit" class="form">
                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg> Trouver mon box
            </button>
        </form>
    </div>

</body>
</html>
