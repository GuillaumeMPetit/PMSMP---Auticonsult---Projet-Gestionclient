<?php

    session_start();

    include_once ("modele/pdo.lib.php");

    if (isset($_GET['deco'])){
        session_destroy();
        $erreur ="Vous avez été déconnecté";
        include_once ('vue/login.inc.php');

    }
    else if (isset($_SESSION['login'])){
        if (isset($_GET['client'])){
            include_once ('controleur/client.inc.php');
        }
        else if (isset($_GET['prospect'])){
            
            include_once('controleur/prospect.inc.php');
        }
        else if (isset($_GET['rechercheaction'])){

            include_once ('controleur/rechercheaction.inc.php');
        }
        else if (isset($_GET['agenda'])){

            include_once ('controleur/agenda.inc.php');
        }
        else if (isset($_GET['ajoutclient'])){

            include_once ('controleur/ajoutclient.inc.php');
        }
        else if (isset($_GET['ajoutprospect'])){

            include_once ('controleur/ajoutprospect.inc.php');
        }
        else if (isset($_GET['ajoutcom'])){

            include_once ('controleur/ajoutcom.inc.php');
        }
        else if (isset($_GET['agenda'])){

            include_once ('controleur/agenda.inc.php');
        }
        else if (isset($_GET['client_con'])){

            include_once ('controleur/client_con.inc.php');
        }
        else {
            include_once ('controleur/home.inc.php');
        }
    }
    else{

        include_once ('controleur/login.inc.php');
    }

?>
