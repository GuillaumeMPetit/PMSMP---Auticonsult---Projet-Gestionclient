<?php
/**
 * Controleur de la page agenda
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    include_once ('modele/agenda.lib.php');
    
	$action = selectionAction();

    include_once ('vue/navbar.inc.php');
    include_once ('vue/agenda.inc.php');
    include_once ('vue/footer.inc.php');

?>