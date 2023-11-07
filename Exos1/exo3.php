<?php ob_start()?>
<form action="#" method="post">                                                 <!--//    form en post      -->
    <label for="rayon">Nombre : </label>                                        <!--//                      -->
    <input type="number" name="rayon" id="rayon">                               <!--//                      -->
    <label for="circ">Circonference</label>                                     <!--//                      -->
    <input type="checkbox" name="circ" id="circ" value="circ">                  <!--// Declaration du form -->
    <label for="surface">Surface</label>                                        <!--//                      -->
    <input type="checkbox" name="surface"id="surface" value="surface"> <br>     <!--//                      -->
    <input type="submit" value="Envoyer">                                       <!--//                      -->
</form>                                                                         <!--//                      -->
<div class="rayon">
<?php 
    if(isset($_POST["rayon"])){
        $rayon = $_POST["rayon"];
        $circonference = 2 * pi() * $rayon; //Calcule de la circonference
        $surface = pi() * ($rayon * $rayon); //Calcule de la surface
    } else {
        echo "<h2>Saisir une valeur dans le champ ci-dessus</h2>";
    }
    if(isset($_POST["circ"]) || isset($_POST["surface"]) ){ // verification si une des checkbox est cocher
    if(@$_POST["circ"] == "circ" && @$_POST["surface"] != "surface") //verification si uniquement la box de circonference est cocher
        echo"La circonference est de : $circonference";
    elseif(@$_POST["circ"] == "circ" && $_POST["surface"] == "surface"){ //verification si les deux box sont cocher
        echo"La circonference est de : $circonference" . "<br/>";
        echo"La surface est de : $surface";
    }elseif($_POST["surface"] == "surface" && @$_POST["circ"] != "circ"){ //verification si uniquement la box de surface est cocher
        echo"La surface est de : $surface";
    }
    }
    else{
        echo "<h2>Cochez une des cases ci-dessus</h2>";
    }
    

?>






<?php
$content = ob_get_clean();
$titre = "Rayon";
require "template.php";
?>
