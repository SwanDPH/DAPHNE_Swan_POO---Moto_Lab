<?php 
include_once('View/parts/navBar.php');
?>

<h1>Nos Motos :</h1>

<div class="titreFiltre"><h3>nos filtres :</h3>
    <div class="filtre">
        <a href="index.php?controller=moto&action=listFiltreType&type=Enduro">Enduro</a>
        <a href="index.php?controller=moto&action=listFiltreType&type=Custom">Custom</a>
        <a href="index.php?controller=moto&action=listFiltreType&type=Sportive">Sportive</a>
        <a href="index.php?controller=moto&action=listFiltreType&type=Roadster">Roadster</a>
    </div>
</div>

<?php
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



<div class="add-moto-button">
<a href="index.php?controller=moto&action=add"><button>Ajouter une moto</button></a>
</div>
