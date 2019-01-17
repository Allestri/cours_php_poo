<?php

$db = new PDO('mysql:host=localhost;dbname=cours_php', 'root', '' , array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

// $request = $db->query('SELECT nom, forcePerso, degats, niveau, experience FROM poo_personnages');
$request = $db->query('SELECT nom, degats FROM poo_personnages');

require 'character2.php';

// $donnees = $request->fetch(PDO::FETCH_ASSOC);


while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) 
{
	print_r($donnees);
	$perso1 = new Personnage ($donnees);

echo 'Votre personnage s\'appelle ' . $perso1->nom() . ' </br>'; // a ' . $perso->forcePerso() . ' de force.<br/>';
}

