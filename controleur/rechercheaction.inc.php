<?php
/**
 * Controleur de la page rechercheaction
 *
 * @author Petit Guillaume
 * @package default
 */
?>


<?php
    include_once ("modele/rechercheaction.lib.php");

    $action = selectionAction();
    
    include_once ("vue/navbar.inc.php");
    include_once ("vue/rechercheaction.inc.php");
    include_once ("vue/footer.inc.php");

?>