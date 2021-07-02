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
function selectionClients()


 return soit Toutes les entreprise cliente en fonction de la personne connecter
 soit si "q" (zone de recherche de la vue) est définie, les entreprise cliente si "q" est = au nom entreprise  
 soit si "entreprise" (bouton "afficher" de la vue) est définie, n'affiche que l'entreprise cliente correspondante au bouton  
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
        }if(isset($_POST['entreprise']) AND !empty($_POST['entreprise'])) {
            
            $q = htmlspecialchars($_POST['entreprise']);
            $client = $pdo->query('Select * FROM tb_entreprise where ntr_client = 1 AND ntr_id LIKE "%'.$q.'%" and ntr_mpl_id = '.$idlog.'  ORDER BY nom ASC'); 
            return $client;
        }
        else{
 
            $client = $req->fetchAll();
            return $client;
        }
    }


/**
 function selectionContact()

 return soit null si entreprise non défini
 soit si "entreprise" (bouton "afficher" de la vue) est définie, les contact des entreprise cliente en fonction de l'ID des entreprise
 */

    function selectionContact(){
        global $pdo;
        $idlog = $_SESSION['id'];
        $req = $pdo -> prepare('Select * from tb_contact');
        $req->execute(array($_SESSION['login']));
        if(isset($_POST['entreprise']) AND !empty($_POST['entreprise'])) {
            $q = $_POST['entreprise'];
            $contact = $pdo->query('Select * FROM tb_contact where con_ntr_id = '.$q.'');
            return $contact;
        }
        else{
 
            $contact = $req->fetchAll();
            return ;
        }
    }
?>