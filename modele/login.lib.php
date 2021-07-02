<?php
/**
 * Modele de la page de connexion
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<?php

    function testConnection($login, $pass){

        global $pdo;

        $req = $pdo->prepare('SELECT * FROM tb_employe WHERE mpl_login = ?');
        $req->execute(array($login));
        if($passC = $req->fetch()) {

            if (password_verify($pass, $passC->mpl_password)) {

                $req->execute(array($login));
                return $req->fetch();
            }
            else{
                return false;
            }
        }
        else{
            
            return false;
        }

    }