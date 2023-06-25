<?php 
include_once('View/parts/navBar.php');
?>

<h1>Welcome <?php
echo($_SESSION['nom']); 
?> !</h1>
<h2>Passe à l'action dès maintenant :</h2>

<div class="moto-item-buttons flexColunm">
<a  href="index.php?controller=moto&action=add"><button class="boutonAccueil">Ajoute une moto</button></a>
<h3> ou </h3>
<a  href="index.php?controller=moto&action=list"><button class="boutonAccueil">Consulter les motos</button></a>
</div>