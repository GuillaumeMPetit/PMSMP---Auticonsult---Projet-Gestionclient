<?php
/**
 * Controleur de la page prospect
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    include_once ("modele/prospect.lib.php");

    $prospect = selectionProspect();
	$contact = selectionContact();
    include_once ("vue/navbar.inc.php");
    include_once ("vue/prospect.inc.php");
    include_once ("vue/footer.inc.php");
?>