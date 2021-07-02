<?php
/**
 * Modele de la page de agenda
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php

    function selectionRdv(){
        global $pdo;
        $idlog = $_SESSION['id'];
        $req = $pdo -> prepare('Select DATE_FORMAT(act_date, "%Y-%c-%e") from tb_actioncom Left join tb_contact on tb_actioncom.act_contact = tb_contact.con_id where act_log_id = '.$idlog.' and act_type = "RDV"');
        $req->execute(array($_SESSION['login']));
        $rdv = $req->fetchAll();
        return $rdv;
    }

$rdv = selectionRdv();
$u = 0;
foreach ($rdv as $rdv){

	$list_spe[$u]=$rdv->{'DATE_FORMAT(act_date, "%Y-%c-%e")'};
	$u++;
} 
//Mettez vos dates des evenements ; NB format(annee-m-j)




$list_fer=array(7);//Liste pour les jours ferié; EX: $list_fer=array(7,1)==>tous les dimanches et les Lundi seront des jours fériers


$array = (array) $rdv;


$lien_redir="index.php?agenda";//Lien de redirection apres un clic sur une date, NB la date selectionner va etre ajouter à ce lien afin de la récuperer ultérieurement 

$clic=1;//1==>Activer les clic sur tous les dates; 2==>Activer les clic uniquement sur les dates speciaux; 3==>Désactiver les clics sur tous les dates
$col1="#d6f21a";//couleur au passage du souris pour les dates normales
$col2="#8af5b5";//couleur au passage du souris pour les dates speciaux
$col3="#6a92db";//couleur au passage du souris pour les dates férié

$mois_fr = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août","Septembre", "Octobre", "Novembre", "Décembre");

if(isset($_POST['mois']) && isset($_POST['annee']))
{
	$mois=$_POST['mois'];
	$annee=$_POST['annee'];
}
else
{
	$mois=date("n");
	$annee=date("Y");
}
$ccl2=array($col1,$col2,$col3);
$l_day=date("t",mktime(0,0,0,$mois,1,$annee));
$x=date("N", mktime(0, 0, 0, $mois,1 , $annee));
$y=date("N", mktime(0, 0, 0, $mois,$l_day , $annee));
$titre=$mois_fr[$mois]." : ".$annee;
//echo $l_day;

    function selectionAction(){
        global $pdo;
        $idlog = $_SESSION['id'];
        $req = $pdo -> prepare('Select * from tb_contact');
        $req->execute(array($_SESSION['login']));
        if(isset($_POST['da']) AND !empty($_POST['da'])) {
           // $q = $_POST['da'];
            $action = '4';//$pdo->query('Select * from tb_actioncom where act_date = '.$dt.'');
            return $action;
        }
        else{
 
            $action = $req->fetchAll();
            return ;
        }
    }

?>