<?php 
class MotoManager extends DbManager{

    // Fonction qui permet de faire afficher toutes les planètes :
    public function getAll(){
        $query = $this->bdd->prepare("SELECT * FROM motos");
        $query->execute();

        $Allmoto = $query->fetchAll();

        $motos = [];
        foreach ($Allmoto as $moto){
            $motos[] = new Moto($moto['id'],$moto['marque'],$moto['modele'],$moto['type'],$moto['image']);
        }
        return $motos;
    }

    public function getOneType($type){
        $query = $this->bdd->prepare("SELECT * FROM `motos` WHERE type =:type");
        $query->execute([
            'type' => $type
        ]);

        $Allmoto = $query->fetchAll();

        $motos = [];
        foreach ($Allmoto as $moto){
            $motos[] = new Moto($moto['id'],$moto['marque'],$moto['modele'],$moto['type'],$moto['image']);
        }
        return $motos;
    }

    public function getOne($id){
        $query = $this->bdd->prepare("SELECT * FROM `motos`WHERE id=:id");
        $query->execute([
            'id' => $id
        ]);
        $resultatMoto = $query->fetch();
        $motoTrouve = new Moto($resultatMoto['id'],$resultatMoto['marque'],$resultatMoto['modele'],$resultatMoto['type'],$resultatMoto['image']);
        return $motoTrouve;
    }


    public function addOne(Moto $moto){
       $marque = $moto->getMarque();
       $modele = $moto->getModele();
       $type = $moto->getType();
       $image = $moto->getImage();

        $query = $this->bdd->prepare("INSERT INTO motos (marque, modele, type, image)
        VALUES (:marque, :modele, :type, :image)");
        $query->execute([
            'marque' => $marque,
            'modele' => $modele,
            'type' => $type,
            'image' => $image
        ]);
        $moto->setId($this->bdd->lastInsertId());
    }

    public function deleteOne($id){
        $query = $this->bdd->prepare("DELETE FROM motos WHERE id=:id");
        $query->execute([
            'id' => $id
        ]);
        return $query;
    }

    public function update($id, $marque, $modele, $type, $image){
        $query = $this->bdd->prepare("UPDATE motos SET marque=:marque, modele=:modele, type=:type, image=:image WHERE id=:id");
        $query->execute([
            'marque' => $marque,
            'modele' => $modele,
            'type' => $type,
            'image' => $image,
            'id' => $id
        ]);
        $reponses = $query->fetch();
    }
}
?>
<h1></h1>