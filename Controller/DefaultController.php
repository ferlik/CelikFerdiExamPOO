<?php
class DefaultController
{

    public function home()
    {
        $voitureManager = new VoitureManager();
        $voitures = $voitureManager->selectAll();

        require 'View/home.php';
    }
}
