<?php 
include_once('View/parts/navBar.php');
?>

<a href="index.php?controller=moto&action=list">
    <svg class="back" fill="#f2f2f2" width="44px" height="44px" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>return</title> <path d="M0 21.984q0.032-0.8 0.608-1.376l4-4q0.448-0.48 1.056-0.576t1.12 0.128 0.864 0.736 0.352 1.12v1.984h18.016q0.8 0 1.408-0.576t0.576-1.408v-8q0-0.832-0.576-1.408t-1.408-0.608h-16q-0.736 0-1.248-0.416t-0.64-0.992 0-1.152 0.64-1.024 1.248-0.416h16q2.464 0 4.224 1.76t1.76 4.256v8q0 2.496-1.76 4.224t-4.224 1.76h-18.016v2.016q0 0.64-0.352 1.152t-0.896 0.704-1.12 0.096-1.024-0.544l-4-4q-0.64-0.608-0.608-1.44z"></path> </g></svg>
</a>

<h1>Liste de moto par TYPE :</h1>


<?php
if (count($Motos) == 0) {
    echo "<h1>Il n'y a aucune moto avec le style ".$_GET['type']."</h1>";
}
    foreach ($Motos as $moto) {
        echo('
        <div class="moto-list">
        <div class="moto-item">
            <div class="moto-item-info">
                <h3>"'.$moto->getMarque().'"</h3>
                <a href="index.php?controller=moto&action=detail&id='.$moto->getId().'"><img class="imgMoto" src="View/parts/imgMoto/'.$moto->getImage().'" alt="" srcset=""></a>
                <p>Modèle: '.$moto->getModele().'</p>
                <p>Type: '.$moto->getType().'</p>
            </div>
            <div class="moto-item-buttons">
            <a href="index.php?controller=moto&action=modify&id='.$moto->getId().'"><button>Modifier</button>
                <a href="index.php?controller=moto&action=delete&id='.$moto->getId().'"><button class="deleteButton">Supprimer</button></a>
            </div>
        </div>


        <div class="modaleConfirmation invisible">
            <p>Êtes-vous certains de vouloir supprimer cette moto ?</p>
            <div class="boutonModale">
            <a href="index.php?controller=moto&action=delete&id='.$moto->getId().'">Oui</a>
            <a onclick="fermetureModale()" class="fermetureModale boutonListVehicule">Non</a>
        </div>
    </div>

    </div>
        ');
    }
?>