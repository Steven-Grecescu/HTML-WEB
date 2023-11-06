<?php ob_start()?>
<form action="#" method="get">
    <label for="pyramide">Pyramide : </label>
    <input type="number" name="pyramide" id="pyramide">
    <input type="submit" value="Envoyer">
</form>
<div class="pyra">
<?php 
    if(isset($_GET["pyramide"])){
        $taille= $_GET["pyramide"];
        for ($i = 0; $i<$taille; $i++) {

        for ($j = 0; $j <= $i; $j++) {
            echo "X";
        }
        echo "<br/>";
        
}
for ($i = $taille+1; $i<$taille*2; $i++) {
    for ($j = 0; $j < $taille * 2 - $i; $j++) {
        echo "X";
    }
    echo "<br/>";

}
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
?>
</div>





<?php
$content = ob_get_clean();
$titre = "Pyramide";
require "template.php";
?>
