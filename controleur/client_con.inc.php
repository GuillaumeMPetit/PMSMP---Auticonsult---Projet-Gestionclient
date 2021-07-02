<?php
/**
 * Controleur de la page client

 *
 * @author Petit Guillaume
 * @package default
 */
?>


<?php
    include_once ("modele/client_con.lib.php");

    $client = selectionClients();
    

    include_once ("vue/navbar.inc.php");
    include_once ("vue/client_con.inc.php");
    include_once ("vue/footer.inc.php");

?>