<!DOCTYPE html>
<html>
<head>
    <title>Calcul de paie</title>
</head>
<body>

<h2>Calcul de paie</h2>

<form method="post" action="">
    Date (AAAA-MM-JJ): <input type="text" name="date"><br>
    Heures travaillées: <input type="text" name="heures"><br>
    <input type="submit" name="submit" value="Calculer">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    function calculerSalaire($heures) {
      
        $salaireHoraire = 25;
        $salaire = 0;

        
        $heuresSemaine = min($heures, 40);
        $salaire += $heuresSemaine * $salaireHoraire * 1.3; 

       
        if ($heures > 40) {
            $heuresSupplementaires = $heures - 40;
            $salaire += $heuresSupplementaires * $salaireHoraire * 1.5; 
        }

        return $salaire;
    }

    
    $date = $_POST["date"];
    $heures = $_POST["heures"];

    
    $jourSemaine = date('N', strtotime($date));
    $salaireTotal = 0;
    if ($jourSemaine >= 1 && $jourSemaine <= 5) {
        $salaireTotal = calculerSalaire($heures);
    } else {
        $salaireTotal = $heures * 25 * 2; 
    }

    echo "Le salaire total pour le $date est de : $salaireTotal$";
}
?>

</body>
</html>
