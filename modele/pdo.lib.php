<?php
/**
 * Variable PDO de connexion à la bdd
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
	$pdo = new PDO('mysql:host=localhost;dbname=gestionclient;charset=utf8', 'root', "");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
?>