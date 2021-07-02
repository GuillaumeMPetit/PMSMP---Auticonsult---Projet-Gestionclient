<?php
/**
 * Modele de la page de ajoutcom
 *
 * @author Petit Guillaume
 * @package default
 */
?>
<?php

function ajoutCom($date, $con_id, $typeaction, $contenu){

    global $pdo;

    $idlog = $_SESSION['id'];
    
    $req = $pdo->prepare("INSERT INTO tb_actioncom (act_date, act_contact, act_type, act_contenu, act_log_id) VALUES (?, ?, ?, ?, '$idlog') ");
    $req->execute(array($date, $con_id, $typeaction, $contenu));

}

function selectionContact(){

    global $pdo;
    $req = $pdo->prepare("SELECT * FROM tb_contact");
    $req->execute(array());
    $contact = $req->fetchAll();
    return $contact;
		
	}
?>