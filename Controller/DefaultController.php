<?php
    class DefaultController {

        public function home(){
            require 'view/home.php';
        }
        public function error404(){
            // On a seulement de l'affichage on require la vue qui
            // correspond à notre page d'accueil
            require 'view/error/error404.php';
        }
    }
?>
