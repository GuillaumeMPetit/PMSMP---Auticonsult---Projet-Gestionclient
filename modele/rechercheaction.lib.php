<?php
/**
 * Modele de la page rechercheaction
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php
    function selectionAction(){
        global $pdo;
        $idlog = $_SESSION['id'];
        $req = $pdo -> prepare("Select * from tb_actioncom Left join tb_contact on tb_actioncom.act_contact = tb_contact.con_id where act_log_id = '$idlog' ");
        $req->execute(array($_SESSION['login']));
        if(isset($_POST['date']) AND !empty($_POST['date'])) {
            $q = htmlspecialchars($_POST['date']);
            $action = $pdo->query('Select * from tb_actioncom Left join tb_contact on tb_actioncom.act_contact = tb_contact.con_id where act_log_id = '.$idlog.' AND act_id LIKE "%'.$q.'%" ');
            return $action;
        } else if(isset($_POST['nom_contact']) AND !empty($_POST['nom_contact'])) {
            $q = htmlspecialchars($_POST['nom_contact']);
            $action = $pdo->query('Select * from tb_actioncom Left join tb_contact on tb_actioncom.act_contact = tb_contact.con_id where act_log_id = '.$idlog.' AND tb_contact.con_name LIKE "%'.$q.'%" ');
            return $action;
        }else if(isset($_POST['typeaction']) AND !empty($_POST['typeaction'])) {
            $q = htmlspecialchars($_POST['typeaction']);
            $action = $pdo->query('Select * from tb_actioncom Left join tb_contact on tb_actioncom.act_contact = tb_contact.con_id where act_log_id = '.$idlog.' AND act_type LIKE "%'.$q.'%" ');
            return $action;
        }
        else{
            $action = $req->fetchAll();
            return $action;
    }
}
?>