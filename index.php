<?php
require 'include.php';
if (empty($_GET)) {
    header("location: index.php?controller=default&action=home");
} else if ($_GET['controller'] === 'default' && $_GET['action'] === 'home') {
    $voitureController = new DefaultController();
    $voitureController->home();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'displayOne' && isset($_GET['id'])) {
    $voitureController = new VoitureController;
    $voitureController->displayOne($_GET['id']);
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'addForm') {
    $voitureController = new VoitureController();
    $voitureController->addForm();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'ajoutVoiture') {
    $voitureController = new voitureController();
    $voitureController->addVoiture();
} else if ($_GET['controller'] === 'voiture' && $_GET['action'] === 'delete') {
    $voitureController = new VoitureController();
    $voitureController->delete($_GET['id']);
} else {
    throw new Exception('La page demandée n\'existe pas', 404);
}
