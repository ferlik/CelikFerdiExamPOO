<?php
class VoitureController
{

    public function displayOne($id)
    {
        $voitureManager = new VoitureManager;
        $voiture = $voitureManager->select($id);
        require 'View/detail.php';
    }

    public function addForm()
    {
        require 'View/insert_form.php';
    }

    public function addVoiture()
    {

        $errors = [];
        if (empty($_POST['marque'])) {
            $errors[] = 'Le champ marque est requis';
        }
        if (empty($_POST['modele'])) {
            $errors[] = 'Le champ modele est requis';
        }
        if (empty($_POST['energie'])) {
            $errors[] = 'Le champ energie est requis';
        }
        if (empty($_POST['boiteAuto'])) {
            $errors[] = 'Le champ boiteAuto est requis';
        }



        if (count($errors) === 0) {
            $voiture = new Voiture(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['boiteAuto'], $_POST['image']);
            $voitureManager = new VoitureManager();
            $voitureManager->insert($voiture);
            header('Location: index.php?controller=default&action=home');
        } else {
            require('View/insert_form.php');
        }
    }

    public function delete($id)
    {
        $voitureManager = new VoitureManager();
        $voitureManager->delete($id);
        header('Location: index.php?controller=default&action=home');
    }





    public function processFormAjout()
    {
        $insert = true;
        $voiture = new Voiture(null, $_POST['marque'], $_POST['modele'], $_POST['energie'], $_POST['boiteAuto'], $_POST['image']);

        if (isset($_FILES['file']) and $_FILES['file']['error'] != 4) {
            var_dump($_FILES);
            $upload =  $this->uploadImage($_FILES['file']);

            if (count($upload['errors']) === 0) {
                $voiture->setImage($upload['file']);
            } else {
                $errors = $upload['errors'];
                $insert = false;
                require 'view/insert_form.php';
            }
        }

        if ($insert === true) {
            $this->ravioleManager->insert($raviole);
            header('Location: /index.php?controller=default&action=home');
        }
    }

    private function uploadImage($file)
    {
        $imageUrl = '';
        $errors = [];
        if ($file['type'] === 'file/jpeg') {
            if ($file['size'] < 800000) {
                $extension = explode('/', $file['type'])[1];
                $imageUrl = uniqid() . '.' . $extension;
                move_uploaded_file($file['tmp_name'], 'images/voitures/' . $imageUrl);
            } else {
                $errors[] = 'Fichier trop lourd impossible';
            }
        } else {
            $errors[] = 'Impossible : j\'accepte que les JPGS !';
        }

        return ['errors' => $errors, 'image' => $imageUrl];
    }
}
