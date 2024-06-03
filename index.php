<?php

require_once 'foot.php';

$equipe1 = new FootballTeam("Equipe 1", "Coach 1");
$equipe2 = new FootballTeam("Equipe 2", "Coach 2");

echo "Nom de l'équipe 1 : " . $equipe1->getName() . " ";
echo "Nom de l'équipe 2 : " . $equipe2->getName() . " ";


?>