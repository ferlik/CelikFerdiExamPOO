<?php
include 'head.php';
?>

<h1 class="titre text-center text-white">La liste des voitures</h1>




<div class="row justify-content-center">


    <div class="col-10">
        <a class="btn btn-outline-danger mr-2" href="index.php?controller=voiture&action=addForm">Ajouter une voiture</a>
        <table class="table table-striped table-dark border rounded p-4 ">
            <thead class="bg-danger">
                <td class="text-white-50">Numéro</td>
                <td class="text-white-50">Marque</td>
                <td class="text-white-50">Modèle</td>
                <td class="text-white-50">Energie</td>
                <td class="text-white-50">Boite Automatique</td>
                <td class="text-white-50">Photo</td>
                <td class="text-white-50">detail</td>
            </thead>

            <tbody>
                <?php
                foreach ($voitures as $voiture) {
                ?>
                    <tr>
                        <td class="text-white"><?php echo $voiture->getId() ?></td>
                        <td class="text-white"><?php echo $voiture->getMarque() ?></td>
                        <td class="text-white"><?php echo $voiture->getModele() ?></td>
                        <td class="text-white"><?php echo $voiture->getEnergie() ?></td>
                        <td class="text-white"><?php echo $voiture->getBoiteAuto() ?></td>
                        <td class="text-white"><img class=" img-thumbnail bg-danger" width="200px" height="100px" src="<?php echo ($voiture->getImage()) ?>"></td>
                        <td>
                            <a class="btn btn-outline-danger mr-2" href="index.php?controller=voiture&action=displayOne&id=<?php echo $voiture->getId() ?>">Détails</a>

                            <a class="btn btn-outline-danger" href="index.php?controller=voiture&action=delete&id=<?php echo $voiture->getId() ?>">Supprimer</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

</div>