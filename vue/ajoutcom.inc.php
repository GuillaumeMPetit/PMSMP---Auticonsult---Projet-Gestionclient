<?php
/**
 * Vue de la page ajoutcom
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Rajouter une action commerciale cliente</h1>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="jumbotron">
                <form action="index.php?ajoutcom" method="post">
                    <div class="form-group">
                        <label for="date">Date de l'action : </label><input type="date" name="date" id="date"><br>
                    </div>
                    <div class="form-group">
                         <label for="con_id">Nom du contact : </label> 
                         <select name="con_id" id="con_id">
                        <?php

                             foreach ($contact as $contact){
                        ?>
                        <option value="<?php echo $contact -> con_id;?>"><?php echo $contact -> con_name;?></option>
                        
                        <?php
                        }
                        ?></select>
                    </div>
                    <div class="form-group">
                        <label for="typeaction">Type d'action : </label>     
                            <select name="typeaction" id="typeaction">
                                <option value="RDV">RDV</option>
                                <option value="Mail">Mail</option>
                                <option value="Tel.">Tel.</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="contenu">Contenu de l'action : </label> <textarea name="contenu" id="contenu"> </textarea><br>
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
