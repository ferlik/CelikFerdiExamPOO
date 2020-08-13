<?php
require 'head.php';
?>

<body>
    <div class="container">
        <h1 class="mt-5 mb-3">Ajout d'une nouvelle voiture</h1>

        <a href="index.php?controller=default&action=home">
            <button class="btn btn-danger mb-3">Retour à la page d'accueil</button>
        </a>

        <form method="post" action="index.php?controller=voiture&action=ajoutVoiture">

            <label>Marque</label>
            <input type="text" name="marque" class="form-control">
            <label>Modèle</label>
            <input type="text" name="modele" class="form-control">
            <label>Energie</label>
            <select name="energie" id="energie" class="form-control">
                <option value="Essence">Essence</option>
                <option value="Diesel">Diesel</option>
                <option value="Electrique">Electrique</option>
                <option value="Hybride">Hybride</option>
            </select>
            <label>Boite Automatique</label>
            <select name="boiteAuto" id="boiteAuto" class="form-control">
                <option value="Oui">Oui</option>
                <option value="Non">Non</option>
            </select>

            <label>Photo</label>
            <input type="text" name="image" class="form-control">
            <input class="btn btn-danger mt-3" type="submit" value="Valider">
        </form>

        <?php
        if (isset($errors)) {
            echo ('<h2 class="text-danger mt-5">Liste des erreurs :</h2>
<ol>');
            foreach ($errors as $error) {
                echo ('<li class="font-weight-bold">' . $error . '</li>');
            }
            echo ('</ol>');
        }
        ?>
    </div>

</body>

</html>