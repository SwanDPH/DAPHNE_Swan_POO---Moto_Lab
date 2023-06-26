<?php
class MotoController
{
    private $vc;
    public function __construct()
    {
        $this->vc = new MotoManager();
    }

    public static $marques = [
        "",
        "Yamaha",
        "Honda",
        "BMW",
        "Suzuki",
        "MBK",
    ];
    public static $types = [
        "",
        "Enduro",
        "Custom",
        "Sportive",
        "Roadster",
    ];

    public static $typeImageAutorise = [
        "image/jpeg",
        "image/png",
        "image/gif",
        "image/webp",
    ];

    public function listMoto()
    {
        $Motos = $this->vc->getAll();
        require 'view/moto/listMoto.php';
    }

    public function listMotoParType($type)
    {
        $Motos = $this->vc->getOneType($type);
        require 'view/moto/listMotoByType.php';
    }

    public function detailMoto($id)
    {
        $Motos = $this->vc->getOne($id);
        if (is_null($Motos)) {
            // header("Location: index.php?controller=default&action=notFound");
            include 'view/error/error404.php';
            die();
        }
            require 'view/moto/detailMoto.php';
    }

    public function addMoto()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (!in_array($_POST["marque"], self::$marques)) {
                $errors["marque"] = "Veuillez choisir une marque disponible";
            }
            if (empty($_POST["marque"])) {
                $errors["marque"] = 'Veuillez saisir une marque';
            }


            if (empty($_POST["modele"])) {
                $errors["modele"] = 'Veuillez saisir un modele';
            }

            if (empty($_POST["type"])) {
                $errors["type"] = 'Veuillez saisir un type';
            }

            if (strlen($_FILES["image"]["name"]) > 0) {
                if (!in_array($_FILES["image"]["type"], self::$typeImageAutorise)) {
                    $errors["image"] = "L'extension de votre fichier n'est pas autorisé";
                }
            }



            if (count($errors) == 0) {
                $nomUniqueImage = null;

                // c'est ici que nous devons gérer l'upload de notre image
                if ($_FILES["image"]["error"] != 0) {
                    $errors["image"] = "L'upload n'a pas été réalisé correctement, veuillez réessayer";
                }
                if ($_FILES["image"]["size"] > 2000000) {
                    $errors["image"] = "Votre fichier est trop volumineux";
                }

                if (count($errors) == 0) {
                    $extension = explode('/', $_FILES["image"]["type"])[1];
                    $nomUniqueImage = uniqid() . '.' . $extension;
                    move_uploaded_file($_FILES["image"]["tmp_name"], "View/parts/imgMoto/" . $nomUniqueImage);
                };

                $nouvelleMoto = new Moto(null, $_POST["marque"], $_POST["modele"], $_POST["type"], $nomUniqueImage);
                $nouvelleMotoENBDD = $this->vc->addOne($nouvelleMoto);
                // header("Location: index.php?controller=moto&action=list");
                echo('
                <div class="divCentrage">
                <p class="centrage" >Création de la nouvelle moto réalisée avec Succès !</p>
                <a class="centrage" href="index.php?controller=moto&action=list">Clique ICI pour revenir sur la liste</a>
                </div>
                ');
                die();
            }
            //voir où mettre le HTML ENTITIES ci-dessous :
            // htmlentities()   
        }
        require 'view/moto/addMoto.php';
    }

    public function deleteMoto($id)
    {
        $affichageFuturSuppression = $this->vc->getOne($_GET["id"]);
        echo("
        <div class='divSuppression'>
        <p class='action'>Tu viens de supprimer :</p>
        <p class='marqueMoto'>".$affichageFuturSuppression->getMarque()."</p>
        <p class='modelMoto'>".$affichageFuturSuppression->getModele()."</p>
        <img src='View/parts/imgMoto/".$affichageFuturSuppression->getImage()."'>
        </div>
        ");
        $supprimerMotoENBDD = $this->vc->deleteOne($id);
        require 'view/moto/deleteMoto.php';
    }

    public function updateMoto($id)
    {
        if (isset($_GET["id"])) {
            $affichageFuturModification = $this->vc->getOne($_GET["id"]);
        echo('
        <h2>Modification de la : </h2>
        <h3>'.$affichageFuturModification->getMarque().' </h3>
        <h3>'.$affichageFuturModification->getModele().'</h3>
        <h4>ID : '.$affichageFuturModification->getId().'</h4>
        ');
        }
        
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            // Récupérer les valeurs soumises par le formulaire
            $marque = $_POST["marque"];
            $modele = $_POST["modele"];
            $type = $_POST["type"];
            $image = $_POST["image"];
            $idMoto = $_GET['id'];

            if (empty($marque)) {
                $errors['marque'] = 'Merci de renseigner une marque';
            };
            if (empty($modele)) {
                $errors['modele'] = 'Merci de renseigner un modele';
            };
            if (empty($type)) {
                $errors['type'] = 'Merci de renseigner un type';
            };

            if (count($errors) == 0) {
                $transformationDesInfosDuFormEnObjetMoto = new Moto($idMoto,$marque,$modele,$type,$image);
                $majMotoENBDD = $this->vc->update($id, $marque, $modele, $type, $image);
                header('Location: index.php?controller=moto&action=detail&id='.$idMoto.'');
            }
        include 'view/moto/updateMoto.php';
    } else {
        include 'view/moto/updateMoto.php';
    }
    }
}
