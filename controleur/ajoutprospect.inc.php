<?php
/**
 * Controleur de la page ajoutprospect
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    include_once ('modele/ajoutprospect.lib.php');



    if (isset($_POST['envoi'])){
        if(!empty($_POST['nom']) && !empty($_POST['adress']) && !empty($_POST['boss']) && !empty($_POST['nbemploye']) ) {
            ajoutprospect($_POST['nom'], $_POST['adress'], $_POST['boss'], $_POST['nbemploye'] );
            $err = "Entreprise prospectée ajoutée";
        }
        else{
            $err = "Remplissez tous les champs";
        }
    }

    include_once ('vue/navbar.inc.php');
    include_once ('vue/ajoutprospect.inc.php');
    include_once ('vue/footer.inc.php');

?>