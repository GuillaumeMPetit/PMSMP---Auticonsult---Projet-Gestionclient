<?php
/**
 * Controleur de la page ajoutcom
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    include_once ('modele/ajoutcom.lib.php');

    $contact = selectionContact();

    if (isset($_POST['envoi'])){
        if(!empty($_POST['date']) && !empty($_POST['con_id']) && !empty($_POST['typeaction']) && !empty($_POST['contenu']) ) {
            ajoutCom($_POST['date'], $_POST['con_id'], $_POST['typeaction'], $_POST['contenu']);
            $err = "Action commercial ajoutée";
        }
        else{
            $err = "Remplissez tous les champs";
        }
    }

    include_once ('vue/navbar.inc.php');
    include_once ('vue/ajoutcom.inc.php');
    include_once ('vue/footer.inc.php');

?>