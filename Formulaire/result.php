<html lang="fr">
    
    <head>
        <meta charset="utf-8">
        <title>Formulaire - Arthur</title>
        <link rel="stylesheet" href="style.css">
        <link rel='icon' href="https://images-eu.ssl-images-amazon.com/images/I/51BEC80AFiL.png">
        <script src="script.js"></script>
    </head>
    
    <body>
        <h1>Formulaire</h1>
            
            <h3> Prénom: <?php echo $_POST["prenom"]; ?></h3><br>
            <h3> Nom: <?php echo $_POST["nom"]; ?></h3><br>
            <h3> Nom Utilisateur: <?php echo $_POST["utilisateur"]; ?></h3><br>
            <h3> mot de passe: <?php echo $_POST["motdepasse"]; ?></h3><br>
            <h3> mot de passe: <?php echo $_POST["confirmemotdepasse"]; ?></h3><br>
            <h3> Email: <?php echo $_POST["email"]; ?></h3><br>
            <h3> Age: <?php echo $_POST["age"]; ?></h3><br>
            <h3> Code Postale: <?php echo $_POST["codepostal"]; ?></h3><br>
            <h3> Question secrète: <?php echo $_POST["questionsecrete"]; ?></h3><br>
            <h3> Réponse secrète: <?php echo $_POST["reponsesecrete"]; ?></h3><br>
            <h3> Pays: <?php echo $_POST["pays"]; ?></h3><br>    
    </body>
    
</html>