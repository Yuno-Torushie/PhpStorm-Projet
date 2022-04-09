<html lang="fr">
    
    <head>
        <meta charset="UTF-8">
        <title>MiniToys</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="lib/bootstrap-5.1.3-dist/css/bootstrap.css" rel="stylesheet">
        <script src="script.js"></script>
    </head>
    <body>
    <!--Barre de menu-->
    <div class="container-fluid mt-head">
        <div class="row">
            <div class="col-4 text-start">
                <a href="index.html"><img class="img-fluid" alt="Brand" src="img/accueil.png" height="50" width="50"></a>
            </div>
            <div class="col-4 text-center">
                <h1 class="white">MiniToys</h1>
            </div>
            <div class="col-4 text-end">
                <a href="Panier.html"><img class="img-fluid" alt="Brand" src="img/panier(1).png" height="50" width="50"></a>
                <a href="result.php"><img class="img-fluid" alt="Brand" src="img/profil.png" height="50" width="50"></a>
            </div>
        </div>
    </div>
    <!--Barre de recherche-->
    <nav class="nav navbar navbar-expand-xl mt-navbar navbar-light">
        <div class="container-fluid col-8 text-start">
            <form class="d-flex">
                <div class="input-group">
                    <input type="search" id="query" class="form-control">
                    <button class="input-group-text" type="button"><img src="img/search.svg"></button>
                </div>
            </form>
        </div>
        <div class="container-fluid col-4 text-end">
            <a href="produits.html" class="white whitehover nounderline taille">Produits</a>
        </div>
    </nav>
    <!--Page-->
    <div class="row justify-content-center">
        <div class="col-4 background">
            <div class="card-body">
                <h4 class="card-title presentation textresponsive">Paramètre de compte :</h4>
            </div>
        </div>
        <div class="col-4 offset-1"></div>
    </div>
    <form class="inputProfil" id="Formulaire" action="result.php" method="post">
        <div class="row justify-content-center" >
            <div class="col-4">
                <h3> Prénom: <?php echo $_POST["prenom"]; ?></h3><br>
                <h3> Nom: <?php echo $_POST["nom"]; ?></h3><br>
                <h3> Email: <?php echo $_POST["email"]; ?></h3><br>
                <h3> Age: <?php echo $_POST["age"]; ?></h3><br>
            </div>
            <div class="col-4 offset-1">
                <h3> Code Postale: <?php echo $_POST["codepostal"]; ?></h3><br>
                <h3> Adresse: <?php echo $_POST["adresse"]; ?></h3><br>
                <h3> Pays: <?php echo $_POST["pays"]; ?></h3><br>
                <div class="compte">
                    <a href="compte.html">Modifier le Compte</a>
                </div>
            </div>
        </div>

    </form>

    <script src="lib/bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"></script>
    </body>
    
</html>