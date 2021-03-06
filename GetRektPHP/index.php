<?php

session_start();

require "vendor/autoload.php";

use Lib as Lib;

$secu = new Lib\Security();


$globals = array(
    "base_path" => "http://" . $_SERVER['HTTP_HOST'] . "/GetRektPHP/",
);
//    echo '<pre>';
//    var_dump($_SERVER);exit;



$redirect_connection = "Location: /?page=connexion";
$view_header = 'views/global/header.php';
$view_footer = 'views/global/footer.php';
$log = 'login';
$passw = 'password';

if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    $sessionUser = unserialize($_SESSION['user']);
}

// si une page est demandée avec '?p=pageDemandee' (dans l'url)
if (isset($_GET['page']) && !empty($_GET['page']) && preg_match("/^[a-zA-Z0-9-]+$/i", $_GET['page'])) {
//        if (!$secu->logged() && $_GET['page'] != 'connexion'){ 
//            header($redirect_connection);  
//        }

    $p = htmlspecialchars(htmlentities($_GET['page']));
    // Vérifie si le fichier existe avant inclusion
    if (file_exists('controller/' . $p . 'Controller.php')) {
        // Inclusion de l'entete de la page
        include_once $view_header;
        // Inclusion du contenu de la page
        include_once 'controller/' . $p . 'Controller.php';
        // Inclusion du pied de page
        include_once $view_footer;
    }
    // sinon renvoi une erreur 404 si le fichier n'existe pas
    else {
        // Inclusion de l'entete de la page
        include_once $view_header;
        // Inclusion du contenu de la page
        include_once 'views/global/404.php';
        // Inclusion du pied de page
        include_once $view_footer;
    }
} elseif (isset($_GET['request']) && !empty($_GET['request']) && isset($_GET['type']) && !empty($_GET['type'])) {

    $apiFoler = 'controller/api/';
    $type = htmlspecialchars(htmlentities($_GET['type']));

    if (file_exists($apiFoler . $type . 'Controller.php')) {

        include_once $apiFoler . $type . 'Controller.php';
    } else {
        include_once 'errorController.php';
    }
} else {
    // Inclusion de l'entete de la page
    include_once $view_header;

    include_once 'controller/accueilController.php';

    // Inclusion du pied de page
    include_once $view_footer;
}
?>