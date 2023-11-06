<?php ob_start()?>
<form action="#" method="post">
    <label for="valeur">Valeur : </label>
    <input type="number" name="valeur" id="valeur">
    <input type="submit" value="Envoyer">
</form>
<div class="trouve">
<?php 
session_start();
if($_SESSION["rand"] == 0){ // Verification pour attribuer un nouveau nombre aleatoire 
$_SESSION["rand"] = rand(1,10); //Atribution de la valeur aleatoire a la superglobal
}
    if(isset($_POST["valeur"])){
        $Saisie = $_POST["valeur"];

            if($Saisie <= 0 || $Saisie == null || $Saisie > 10){ //Verification si la valeur entrer est compris entre 1 et 10 et qu'elle n'est non null
                echo("Veuillez saisir un nombre compris en 1 et 10");
                }
            elseif($Saisie > $_SESSION["rand"]){//Verification si la valeur entrer est plus grande que la valeur aléatoire
                echo("!!! PLUS PETIT !!!" . "<br/>");
                }
            elseif($Saisie < $_SESSION["rand"]){ //Verification si la valeur entrer est plus petite que la valeur aléatoire
                echo("!!! PLUS GRAND !!!" . "<br/>");
                }
             else{ //La valeur entrer est la bonne on l'affiche et on remet la superglobal a 0 afin de regenerer un nombre aléatoire
                echo("BRAVO !!! VOUS AVEZ TROUVEZ LE CHIFFRE MYSTERE QUI ETAIT :  $_SESSION[rand] " . "\n");
                $_SESSION["rand"] = 0;
             }
            }
        
     else {
        echo "<h2>Saisir une valeur comrpise entre 1 et 10 dans le champ ci-dessus</h2>";
    }
?>
<?php
$content = ob_get_clean();
$titre = "Trouver le nombre mystere";
require "template.php";
?>
