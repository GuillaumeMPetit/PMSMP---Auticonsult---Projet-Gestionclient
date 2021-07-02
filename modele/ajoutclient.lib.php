<?php
/**
 * Modele de la page de ajoutclient
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php

/**
* function ajoutclient()
*
*		Permet de rajouter des clients dans la base de donné
*/

	function ajoutclient($nom, $adress, $boss, $nbemploye){

    	global $pdo;

    	$req = $pdo->prepare("INSERT INTO tb_entreprise (nom, ntr_adress, ntr_boss, ntr_nbEmploye, ntr_client, ntr_mpl_id) VALUES (?, ?, ?, ?, 1, '$idemploye')");
	    $req->execute(array($nom, $adress, $boss, $nbemploye));

	}
?>