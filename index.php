<?php

    // chargement de la classe rectangle du tp1
    require_once("source/Rectangle.php");
    // on construit un rectangle de largeur 200 pixels et de hauteur 300 pixel, 
    // le constructeur __construct() est appelé
    $rect = new Rectangle(200,300);
    // on affiche les paramètres du rectangle, la fonction magique __toSting est appelé 
    $rect->affichage();
?>

