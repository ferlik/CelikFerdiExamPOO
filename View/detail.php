<?php
require 'head.php';
?>
<br>
<div class='mydiv'>

    <div class="col-12 p-0 card  img-thumbnail bg-danger" style="width: 35rem; margin-left: 32%;">

        <div class="card-body bg-secondary text-center">
            <h1 class="card-title text-dark">Marque: </h1>
            <h1> <?php echo ($voiture->getMarque()) ?> </h1><br>
            <h2 class="card-title text-dark">Modèle: </h2>
            <h3> <?php echo ($voiture->getModele()) ?></h3><br>
            <h2 class="card-text text-dark">Photo facultatif: </h2>
            <p><img class=" img-thumbnail bg-danger" width="200px" height="200px" src="<?php echo ($voiture->getImage()) ?>"></p>

            <h4 class="card-text text-dark">Energie: </h4>
            <p> <?php echo ($voiture->getEnergie()) ?></p>
            <h4 class="card-text text-dark">Boite automatique: </h4>
            <p> <?php echo ($voiture->getBoiteAuto()) ?></p>




        </div>

    </div>
</div>