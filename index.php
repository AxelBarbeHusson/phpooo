<?php
require ('./classes/Voiture.php');
require ('./functions/debug.php');

$voiture1 = new Voiture("Lada", "Niva","Blanc",[2000,1500,500],500);
debug($voiture1);