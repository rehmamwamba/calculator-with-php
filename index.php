<?php 
if(isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    switch($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "%":
            $result = $num1 % $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rehma's Calculator</title>
</head>
<body>
    <div class="calcul">
        <form action="" method="POST">
            <label for="">Num1</label>
            <input type="text" name="num1">
            <select name="operator" id="">
                <option value="+">Addition</option>
                <option value="*">Multiplication</option>
                <option value="%">Division</option>
                <option value="-">Soustraction</option>
            </select>
            <label for="">Num2</label>
            <input type="text" name="num2">
            <input type="submit" value="Calculer" name="submit">
        </form>

        <?php if(isset($result)) { ?>
            <p>Résultat : <?php echo $result; ?></p>
        <?php } ?>
    </div>
</body>
</html>
