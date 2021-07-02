<?php
/**
 * Vue de la page ajoutclient
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Rajouter une entreprise </h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <form action="index.php?ajoutclient" method="post">
                    <div class="form-group">
                        <label for="nom">nom de l'entreprise : </label><input type="varchar" name="nom" id="nom"><br>
                    </div>
                    <div class="form-group">
                        <label for="adress">adresse de l'entreprise : </label><input type="text" name="adress" id="adress"><br>
                    </div>
                    <div class="form-group">
                        <label for="boss">Nom du Patron : </label><input type="varchar" name="boss" id="boss"><br>
                    </div>
                    <div class="form-group">
                        <label for="nbemploye">Nombre d'employe : </label><input type="int" name="nbemploye" id="nbemploye"><br>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Ajouter" name="envoi">
                    </div>
                        <?php
                    if (isset($err)){
                        ?>
                        <H2><?php echo $err;?></H2>
                        <?php
                    }
                        ?>
                </form>
            </div>
        </div>
    </div>
</div>
