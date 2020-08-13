<?php
class VoitureManager extends DbManager
{
    public function __construct()
    {
        parent::__construct();
    }

    public function selectAll()
    {
        $voiture = [];
        $sql =  'SELECT * FROM voiture';
        foreach ($this->bdd->query($sql) as $row) {
            $voiture[] = new Voiture($row['id'], $row['marque'], $row['modele'], $row['energie'], $row['boiteAuto'], $row['image']);
        }

        return $voiture;
    }

    public function insert(Voiture $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $boiteAuto = $voiture->getBoiteAuto();
        $image = $voiture->getImage();


        $requete = $this->bdd->prepare("INSERT INTO voiture (marque, modele, energie, boiteAuto, image) VALUES (?,?,?,?,?)");
        $requete->bindParam(1, $marque);
        $requete->bindParam(2, $modele);
        $requete->bindParam(3, $energie);
        $requete->bindParam(4, $boiteAuto);
        $requete->bindParam(5, $image);


        $requete->execute();
        $voiture->setId($this->bdd->lastInsertId());
    }

    public function delete($id)
    {
        $requete = $this->bdd->prepare("DELETE FROM voiture where id = ?");
        $requete->bindParam(1, $id);
        $requete->execute();
    }

    public function select($id)
    {
        $requete = $this->bdd->prepare("SELECT * FROM voiture WHERE id=?");
        $requete->bindParam(1, $id);
        $requete->execute();
        $res = $requete->fetch();
        $voiture = new Voiture($res['id'], $res['marque'], $res['modele'], $res['energie'], $res['boiteAuto'], $res['image']);

        return $voiture;
    }

    public function update(Voiture $voiture)
    {
        $marque = $voiture->getMarque();
        $modele = $voiture->getModele();
        $energie = $voiture->getEnergie();
        $id = $voiture->getId();
        $boiteAuto = $voiture->getBoiteAuto();
        $image = $voiture->getImage();

        $requete = $this->bdd->prepare("UPDATE voiture SET marque =?, modele = ?, energie = ?, boiteAuto = ?, image = ?, WHERE id = ?");
        $requete->bindParam(1, $marque);
        $requete->bindParam(2, $modele);
        $requete->bindParam(3, $energie);
        $requete->bindParam(4, $boiteAuto);
        $requete->bindParam(5, $image);
        $requete->bindParam(6, $id);
        $requete->execute();
    }

    public function compteur()
    {
        $compteur = $this->bdd->query('SELECT COUNT(*) AS nb FROM voiture');
        $resultat = $compteur->fetch();
        $nb = $resultat['nb'];
        return $nb;
    }
}
