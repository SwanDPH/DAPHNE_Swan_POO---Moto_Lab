<?php 
include_once('View/parts/navBar.php');
?>

<div class="moto-container">
    <div class="moto-image">
        <img class="imgMoto" src="<?php echo("View/parts/imgMoto/".$Motos->getImage()); ?>" alt="Moto">
    </div>

    <div class="moto-details">
        <h2><?php echo($Motos->getMarque()); ?></h2>
        <h3>Modèle: <?php echo($Motos->getModele()); ?></h3>
        <p>Type: <?php echo($Motos->getMarque()); ?></p>
    </div>

    <div class="moto-buttons">
        <a href="index.php?controller=moto&action=modify&id=<?php echo($Motos->getId());?>"><button>Modifier</button>
        <a href="index.php?controller=moto&action=delete&id=<?php echo($Motos->getId());?>"><button>Supprimer</button>
    </div>
</div>