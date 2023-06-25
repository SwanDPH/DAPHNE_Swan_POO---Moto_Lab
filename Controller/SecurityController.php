<?php class SecurityController{
    private $vc;

    public function __construct()
    {
        $this->vc = new SecurityManager();
    }

    public function register(){

        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $mot_de_passe = $_POST['mot_de_Passe'];

            
        $user = $this->vc->getUser($username,$mot_de_passe);
        if (!empty($user)) {
            if (!isset($_SESSION['nom'])) {
                $_SESSION['id'] = $user->getId(); 
                $_SESSION['nom'] = $user->getNom();
                $_SESSION['prenom'] = $user->getPrenom();
                // header('Location: index.php?controller=moto&action=list');
                echo'
                <div class="divCentrage">
                <a class="centrage" href="index.php?controller=default&action=home">Clique ici, pour avoir accès aux autres menus</a>
                </div>
                ';
                die();
            }
            
        }


        if (empty($_POST["username"])) {
            $errors["username"] = 'Veuillez saisir un Pseudo';
        }

        if (empty($_POST["mot_de_Passe"])) {
            $errors["mot_de_Passe"] = 'Veuillez saisir un mot de passe';
        }
        }
        require 'View/security/formRegister.php';
    }

    public function logOut(){
        session_destroy();
        require 'View/security/disconnect.php';
    }
}?>