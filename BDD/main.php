<?php
    include_once ('db.inc.php');

echo'<title>Formulaire - Arthur</title>';
echo'<link rel="stylesheet" href="style.css">';
echo'<link rel= "icon" href="https://images-eu.ssl-images-amazon.com/images/I/51BEC80AFiL.png">';

echo'<form id="Formulaire" action="main.php" method="post">
            <div>
                <input id="Pokemon" type="text" name="pokemon" placeholder="Rechercher votre Pokemon" maxlength="30">
            </div>
            
            <div>
                <input id="Pokédex" type="radio" name="recherche" checked>
                <label for="Pokédex">Id Pokédex</label><br>
            </div>
            
            <div>
                <input id="Nom" type="radio" name="recherche">
                <label for="Nom">Nom</label><br>
            </div>
            
            <div>
                <input id="Type" type="radio" name="recherche">
                <label for="Type">Type</label><br>
            </div>
            <div>  
                <input id="Type2" type="radio" name="recherche">
                <label for="Type2">Second Type</label><br>
            </div>
            
            <div>
                <input id="HP" type="radio" name="recherche">
                <label for="HP">HP</label><br>
            </div>
           
            <div>
                <input id="Attaque" type="radio" name="recherche">
                <label for="Attaque">Attaque</label><br>
            </div>
            
            <div>
                <input id="Defense" type="radio" name="recherche">
                <label for="Defense">Defense</label><br>
            </div>
                        
            <div>
                <input id="Attaque_Special" type="radio" name="recherche">
                <label for="Attaque_Special">Attaque Special</label><br>
            </div>
            
            <div>
                <input id="Defense_Special" type="radio" name="recherche">
                <label for="Defense_Special">Defense Special</label><br>
            </div>
            
            <div>
                <input id="Vitesse" type="radio" name="recherche">
                <label for="Vitesse">Vitesse</label><br>
            </div>
              <div>
                <button type="submit">Envoyer</button>
            </div>
    </form>';
//    if(empty($_POST['pokemon'])){
//        $_POST['pokemon'] = "nom";
//    }
//    if(empty($_POST['recherche'])){
//        $_POST['recherche'] = 1;
//    }
//    echo $_POST['recherche']."<br>";
//    echo $_POST['pokemon']."<br>";

//    // JE SOUHAITE FAIRE QUE LES POKEMONS QUI N'ONT PAS DE SECOND TYPE AI AUCUN à LA PLACE
//    $sqlType2 = 'SELECT Type2 FROM Pokemon';
//    if($sqlType2['Type2'] == null){
//        $sqlType2['Type2'] = Aucun;
//    }

    $db = new PDO("$server:host=$host;dbname=$base",$user, $pass);
    $sql = 'SELECT Pokedex, Nom, Type, Type2, HP, Attaque, Defense, Attaque_Special, Defense_Special, Vitesse FROM Pokemon';

    $rs = $db->query($sql);
    if (is_object($rs)){
        $ligne = $rs->fetch();
        while(is_array($ligne)){
            echo 'Id : '.$ligne['Pokedex']." | \t";
            echo 'Nom : '.$ligne['Nom']." | \t";
            echo 'Type : '.$ligne['Type']." | \t";
            echo 'Second Type : '.$ligne['Type2']." | \t";
            echo 'HP : '.$ligne['HP']." | \t";
            echo 'Attaque : '.$ligne['Attaque']." | \t";
            echo 'Défense : '.$ligne['Defense']." | \t";
            echo 'Attaque Spécial : '.$ligne['Attaque_Special']." | \t";
            echo 'Défense Spécial : '.$ligne['Defense_Special']." | \t";
            echo 'Vitesse : '.$ligne['Vitesse']."<br />";
            $ligne = $rs->fetch();
        }
    }

      $db = null;
