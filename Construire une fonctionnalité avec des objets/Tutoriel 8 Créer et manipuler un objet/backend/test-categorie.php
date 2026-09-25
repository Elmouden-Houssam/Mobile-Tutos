<?php

require_once "Categorie.php";

$categorie1 = new Categorie(1, "Développement Web", "Bleu", "💻");
$categorie2 = new Categorie(2, "Design UI/UX", "Rose", "🎨");

$categorie1->afficher();

echo "<br>";

$categorie2->afficher();