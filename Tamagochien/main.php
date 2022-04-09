<?php
include_once("Chien.class.php");
include_once("Nourriture.class.php");

$chien1 = new Chien("Grégorie","Content", 100, 100, "Propre", 4);
$nourriture1 = new Nourriture("Carotte", "Content", -5, 20);

echo $chien1->statChien()."<br>";
echo $chien1->aboi()."<br>";
echo $chien1->statChien()."<br>";
echo $chien1->mordre()."<br>";
echo $chien1->statChien()."<br>";
echo $chien1->sePromener()."<br>";
echo $chien1->statChien()."<br>";
echo $chien1->seLaver()."<br>";
echo $chien1->statChien()."<br>";
echo $chien1->dormir()."<br>";
echo $chien1->statChien()."<br>";
echo $chien1->manger($nourriture1)."<br>";
echo $chien1->statChien()."<br>";

?>