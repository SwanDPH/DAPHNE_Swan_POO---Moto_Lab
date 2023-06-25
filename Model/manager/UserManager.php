<?php 
class UserManager extends DbManager{

    // Fonction qui permet de faire afficher toutes les planètes :
    public function getAll(){
        $query = $this->bdd->prepare("SELECT * FROM users");
        $query->execute();

        $All_user = $query->fetchAll();

        $users = [];
        foreach ($All_user as $user){
            $users[] = new user($user['id'],$user['username'],$user['nom'],$user['prenom'],$user['mot_de_passe'],$user['email']);
        }

        return $users;
    }
}
?>