<?php

$usr = "i204605";
$pass = "Iuc463zv";

$db = new PDO('mysql:host=localhost;dbname=info2_i204605_Pizza',$usr,$pass);

$_GET['output'] .= '%';

$sql = $db -> prepare("SELECT * FROM Pizza WHERE Nom LIKE ?");

$sql->execute([$_GET['output']]);

foreach ($sql as $ligne){
    echo $ligne['Nom']."<br>";
}
