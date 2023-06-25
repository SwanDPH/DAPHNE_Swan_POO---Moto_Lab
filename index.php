<?php session_start();
include_once('view/parts/navBar.php');
?>
<!-- On appel notre AUTO-LOAD -->
<?php
include_once('autoload.php');

if (isset($_SESSION['name'])) {
    header("Location: index.php?controller=security&action=register");
    die();
}

if (!isset($_GET['controller']) && !isset($_GET['action'])) {
    header("Location: index.php?controller=default&action=home");
    die();
}


if ($_GET['controller'] == 'security') {
    $controller = new SecurityController();
    if ($_GET['action'] == 'register') {
        $controller->register();
    }
    if ($_GET['action'] == 'disconnect') {
        require 'View/security/disconnect.php';
        // $controller->logOut();
    }
}


if ($_GET['controller'] == 'default') {
    $controller = new DefaultController();
    if ($_GET['action'] == 'home') {
        $controller->home();
    }
    if ($_GET['action'] == 'notFound') {
        $controller->error404();
    }
}

if ($_GET['controller'] == 'moto') {
    $controller = new MotoController();
    if ($_GET['action'] == 'list') {
        $controller->listmoto();
    }
    if (isset($_GET['type'])) {
        if ($_GET['action'] == 'listFiltreType' && $_GET['type'] == 'Enduro' || $_GET['type'] == 'Custom' || $_GET['type'] == 'Sportive' || $_GET['type'] == 'Roadster') {
            $controller->listMotoParType($_GET['type']);
    }
    }
       

    if ($_GET['action'] == 'detail') {
        $controller->detailMoto($_GET['id']);
    }
    if ($_GET['action'] == 'add') {
        $controller->addMoto();
    }
    if ($_GET['action'] == 'delete') {
        $controller->deleteMoto($_GET['id']);
    }

    if ($_GET['action'] == 'modify') {
        $controller->updateMoto($_GET['id']);
    }

    
}


?>