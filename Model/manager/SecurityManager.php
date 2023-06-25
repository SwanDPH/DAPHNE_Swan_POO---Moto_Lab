<?php 
class SecurityManager extends DbManager{

    public function getUser($username, $mot_de_passe){
        $query = $this->bdd->prepare("SELECT * FROM `users` WHERE username=:username AND mot_de_passe=:mot_de_passe");
        $query->execute([
            'username' => $username,
            'mot_de_passe' => $mot_de_passe
        ]);
        $resultatUser = $query->fetch();
        if (!empty($resultatUser)) {
            $userTrouve = new User($resultatUser['id'],$resultatUser['username'],$resultatUser['nom'],$resultatUser['prenom'],$resultatUser['mot_de_passe'],$resultatUser['email']);
            return $userTrouve;
        } else {
            echo('La combinaison Pseudo + Mot de passe est incorrecte');
        }
    }
}
?>
<h1></h1>