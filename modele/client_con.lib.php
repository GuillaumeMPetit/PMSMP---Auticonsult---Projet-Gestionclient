<?php
/**
 * Modele de la page client
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php

    /** 
     * Sélection des Clients

     * Récupère tous les entreprise cliente disponibles en fonction de la personne connecté
     * @return array liste des clients


     */

    function selectionClients(){
        global $pdo;
        $idlog = $_SESSION['id'];
        $req = $pdo -> prepare('Select * from tb_entreprise where ntr_client = 1 and ntr_mpl_id = '.$idlog.' order by nom asc  ');
        $req->execute(array($_SESSION['login']));
        if(isset($_POST['q']) AND !empty($_POST['q'])) {
            $q = htmlspecialchars($_POST['q']);
            $client = $pdo->query('Select * FROM tb_entreprise where ntr_client = 1 AND nom LIKE "%'.$q.'%" and ntr_mpl_id = '.$idlog.'  ORDER BY nom ASC');
            return $client;
        }
        else{
 
            $client = $req->fetchAll();
            
            return $client;
        }
    }

    function selectionContact(){
        global $pdo;
        $req = $pdo -> prepare('Select * from tb_contact');
        $req->execute(array($_SESSION['login']));
        if(isset($_POST['id']) AND !empty($_POST['id'])) {
            $q = $_POST['id'];
            $contact = $pdo->query('Select * FROM tb_contact where con_ntr_id = '.$q.'');
            return $contact;
        }
        else{
 
            $contact = $req->fetchAll();
            return $contact;
        }
    }
?>