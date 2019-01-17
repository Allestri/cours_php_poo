<?php

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '' , array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$request = $db->query('SELECT nom , forcePerso FROM poo_personnages');

require 'character2.php';

while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) 
{
	$personnage = new Personnage($donnees);
	
	echo 'Votre personnage s\'apelle ' . $personnage->nom() . ' a ' . $personnage->forcePerso() . ' de force.<br/>';
}