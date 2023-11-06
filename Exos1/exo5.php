<?php ob_start() ?>
<form action="#" method="get">
    <label for="table">Combien de notes : </label>
    <input type="number" name="nombreNote" id="NombreNote">
    <input type="submit" value="Valider">
</form>
<div class="note">
    <?php
    if (isset($_GET["nombreNote"])) {
        $total = 0;
        $nombreNote = $_GET["nombreNote"];
        for ($i = 0; $i < $nombreNote; $i++) {
            if ($i == 0) {
                echo "<form action='#' method='get'>";
            }
            echo  "<label for='table'>Note " . $i + 1 . " : </label> ";
            echo "<input type='number' name='nombreNote$i' id='nombreNote$i'> ";
            if ($i == $nombreNote - 1) {
                echo "</form>";
            }
        }
        echo "<input type='submit' value='Calculer'>";
        for ($i = 0; $i < $nombreNote; $i++) {
            $total += $_GET["nombreNote$i"];
        }
        $moyenne = $total / $nombreNote;
        echo "La moyenne est de : $moyenne";
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }

    ?>

    <?php
    $content = ob_get_clean();
    $titre = "Moyenne";
    require "template.php";
    ?>