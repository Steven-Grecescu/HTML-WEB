<?php ob_start() ?>
<div class="formResult">
    <h2>Convertisseur de monnaie</h2>
    <form action="#" method="get" class="formexo6">
        <label for="inpu-devise">Montant (€) </label>
        <input type="number" name="input-devise" id="input-devise"><br><br>
        <label for="devise-select">Devises </label>
        <select name="devises" id="devises-select">
            <option value="">Choisisez une devise</option>
            <option value="dolar">Dolars</option>
            <option value="livre">Livre</option>
            <option value="peso">Peso</option>
            <option value="rouble">Roubles</option>
            <option value="yen">Yen</option>
            <option value="yuan">Yuan</option>
        </select><br><br>
        <input type="submit" value="Convertir"><br><br>

        

    </form>
    <div class="result">
        <?php
        $devise = $_GET["input-devise"];

        switch ($_GET["devises"]) {

            case "dolar":
                $devise = $devise * 1.07;
                break;
            case "livre":
                $devise = $devise * 0.87;
                break;
            case "peso":
                $devise = $devise * 18.77;
                break;
            case "rouble":
                $devise = $devise * 98.87;
                break;
            case "yen":
                $devise = $devise * 160.98;
                break;
            case "yuan":
                $devise = $devise  * 7.8;
                break;
        }

        echo "<label for='hResult' class='labelResult'>Resultat : $devise</label>";

        ?>
    </div>
</div>
<?php
$content = ob_get_clean();
$titre = "";
require "template.php";
?>