<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>TP_NOTE</title>
</head>
<body>
	<div class="pokedex">
		<div class="pan_right"> </div>
		<div class="pan_screen"> 

		<?php
		include_once("db.inc.php");
		include_once("pokemon.class.php");
		
		if(isset($_POST['tri']))
		{
			try
			{
				$bdd = new PDO("mysql:host=localhost;dbname=$db_name",$user,$pass);
				$sql = "SELECT * FROM `pokedex` WHERE 1" ;
				$arguments = array();
				if($_POST['type0'] != "EMPTY")
				{
					$sql .= " AND types0nom = ?";
					array_push($arguments, $_POST['type0']);
				}
				

				if($_POST['type1'] != "EMPTY")
				{
					$sql .= " AND types1nom = ?";
					array_push($arguments, $_POST['type1']);
				}

				
				$reponse = $bdd->prepare($sql);

				if(is_object($reponse))
				{
					$reponse->execute($arguments);
					$tmp = $reponse->fetchAll();
					foreach ($tmp as $ligne) 
					{
						$tmp = new Pokemon($ligne['id'],$ligne['nom'],$ligne['types0nom'],$ligne['types0couleur'],$ligne['types1nom'],$ligne['types1couleur'],$ligne['baseHP']	,$ligne['baseAttack'],$ligne['baseDefense'],$ligne['baseSpAttack'],$ligne['baseSpDefense'],$ligne['baseSpeed'],$ligne['description'],$ligne['image']);	
						echo $tmp->printHTML();	
						
					}
				}
				

			}
			catch(PDOExeption $err)
			{
				echo "Erreur : " . $e->getMessage() . "<br />";
				die();
			}
		}
		
		

		?>
			
		</div>
		<div class="pan_left"> 
			<div>
				<p class="cadre">
					Prénom : </br>
					Nom :  </br>
					numéro étudiant :  </br>
				</p>
			</div>
			<div>
				<form method="post" class=cadre>
					Rechercher :<br>
					Type 0 : <select name="type0">
						<option value="EMPTY">---</option>
						<option value="Combat">Combat</option>
						<option value="Dragon">Dragon</option>
						<option value="Eau">Eau</option>
						<option value="Electrique">Electrique</option>
						<option value="Fée">Fée</option>
						<option value="Feu">Feu</option>
						<option value="Glace">Glace</option>
						<option value="Insecte">Insecte</option>
						<option value="Normal">Normal</option>
						<option value="Plante">Plante</option>
						<option value="Poison">Poison</option>
						<option value="Psy">Psy</option>
						<option value="Roche">Roche</option>
						<option value="Sol">Sol</option>
						<option value="Spectre">Spectre</option>
					</select>
					Type 1 : <select name="type1">
						<option value="EMPTY">---</option>
						<option value="Acier">Acier</option>
						<option value="Combat">Combat</option>
						<option value="Eau">Eau</option>
						<option value="Fée">Fée</option>
						<option value="Glace">Glace</option>
						<option value="Plante">Plante</option>
						<option value="Poison">Poison</option>
						<option value="Psy">Psy</option>
						<option value="Roche">Roche</option>
						<option value="Sol">Sol</option>
						<option value="Vol">Vol</option>
					</select><br>
					Condition : <select name="condition">
						<option value="EMPTY">---</option>
						<option value="id">ID</option>
						<option value="baseHP">HP</option>
						<option value="baseAttack">ATQ</option>
						<option value="baseDefense">DEF</option>
						<option value="baseSpAttack">SP_ATQ</option>
						<option value="baseSpDefense">SP_DEF</option>
						<option value="baseSpeed">SPEED</option>
					</select> 
					<select name="operator">
						<option value="EMPTY">---</option>
						<option value=" = ">=</option>
						<option value=" > ">></option>
						<option value=" >= ">>=</option>
						<option value=" < "><</option>
						<option value=" <= "><=</option>
					</select> 
					<input type="number" name="MinMaxValue" min="0" max="300"><br>
					<input class="btn" type="submit" name="tri" value="Afficher les résultats">
				</form>
			</div>
			
			
		</div>
		

		<div class="pan_center"></div>
	</div> 
</body>
</html>