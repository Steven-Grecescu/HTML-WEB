<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style8.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img src="/img/PHP-logo.svg.png" alt="">
        <div>
            <h1>PHP procédural</h1>
            <p>Créer le back-end permettant de sauvegarder des données en session à travers un formulaire</p>
            <p>J'apprends et je me perfectionne</p>
        </div>
    </header>
    <li><a href="index.php">Accueil</a></li>
    <section>
        <form action="#" method="get">
            <select name="menu" id="menu">
                <option value="homme">Home</option>
                <option value="debogage">Débogage</option>
                <option value="concatenation">Concaténation</option>
                <option value="boucle">Boucle</option>
                <option value="fonction">Fonction</option>
                <option value="supprimer">Supprimer</option>
            </select><br><br>
            <button name="ok" value="ok" type="submit">Ajouter des données</button>

        </form>

        <?php
        $verif = $_GET["ok"];
        if ($verif == "ok") {
echo "</section>
<form action='#' method='post'>
<input type='text' name='prenom' id='prenom' placeholder='Prenom'>
<input type='text' name='nom' id='nom' placeholder='Nom'>
<input type='number' name='age' id='age' placeholder='Age (18 à 70 ans)'>
<input type='number' name='taille' id='taille' placeholder='Votre taille (1,26m à 3m)'>
<div>
 <label for='femme'>Femme : </label>   
<input type='checkbox' name='femme' id='femme' >
<label for='homme'>Homme : </label>
<input type='checkbox' name='homme' id='homme' >
</div>
<input type='submit' value='Enregistrer les données'>
<button type='reset'>Reinitialiser les champs</button>
</form>";

        }

        ?>
</body>

</html>



<!-- </form>
    <button>Ajouter des données</button>
    </section>
    <form action="#" method="post">
    <input type="text" name="prenom" id="prenom" placeholder="Prenom">
    <input type="text" name="nom" id="nom" placeholder="Nom">
    <input type="number" name="age" id="age" placeholder="Age (18 à 70 ans)">
    <input type="number" name="taille" id="taille" placeholder="Votre taille (1,26m à 3m)">
    <div>
     <label for="femme">Femme : </label>   
    <input type="checkbox" name="femme" id="femme" >
    <label for="homme">Homme : </label>
    <input type="checkbox" name="homme" id="homme" >
    </div>
    <input type="submit" value="Enregistrer les données">
</form> -->