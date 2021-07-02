<?php
/**
 * Modele de la page ajoutprospzct
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
	function ajoutprospect($nom, $adress, $boss, $nbemploye){

    	global $pdo;

    	$idemploye = $_SESSION['id'];

    	$req = $pdo->prepare("INSERT INTO tb_entreprise (nom, ntr_adress, ntr_boss, ntr_nbEmploye, ntr_client, ntr_mpl_id) VALUES (?, ?, ?, ?, 0, '$idemploye')");
    	$req->execute(array($nom, $adress, $boss, $nbemploye));

	}
?>