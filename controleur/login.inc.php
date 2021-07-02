<?php
/**
 * Controleur de la page de connexion
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    if (!empty($_POST['login']) && !empty($_POST['password'])){
        include_once ('modele/login.lib.php');

        if (!empty($resreq= testConnection($_POST['login'], $_POST['password']))){

            $erreur = "rentre ici";
            $_SESSION['login'] = $resreq->mpl_login;
            $_SESSION['nom'] = $resreq->mpl_nom;
            $_SESSION['id'] = $resreq->mpl_id;
            header('Location: index.php');
        }
        else{
            $erreur = "Identifiant ou mot de passe incorrect";
            include_once ('vue/login.inc.php');
        }
    }
    else{
        include_once ('vue/login.inc.php');
    }
?>
