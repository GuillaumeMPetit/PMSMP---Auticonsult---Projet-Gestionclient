<?php
/**
 * Controleur de la page client
 *
 * @author Petit Guillaume
 * @package default
 */
?>


<?php
    include_once ("modele/client.lib.php");

    $client = selectionClients();
   	$contact = selectionContact();
    include_once ("vue/navbar.inc.php");
    include_once ("vue/client.inc.php");
    include_once ("vue/footer.inc.php");

?>