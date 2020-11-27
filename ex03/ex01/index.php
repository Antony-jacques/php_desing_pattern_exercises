<?php
include_once('FoodFactory.php');
include_once('Food.php');
include_once('FoodChef.php');




$woodenFactory = new AsianFoodFactory();

$door = $woodenFactory->makeFood();
$expert = $woodenFactory->makeExpert();

$asianFood->getDescription(); 
$asianChef->getDescription();

// Idem pour le Factory de porte en fer
$ironFactory = new FrenchFoodFactory();

$door = $ironFactory->makeFood();
$expert = $ironFactory->makeExpert();

$door->getDescription(); 
$expert->getDescription();