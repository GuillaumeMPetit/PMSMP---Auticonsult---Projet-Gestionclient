<?php
/**
 * Vue de la page des client
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<div class="container">
    <div class="row">
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-color">
                <form  action="index.php?rechercheaction" method="post">
                    <tr>
                        <th scope="col">
                            Date
                           <input type="date" name="date" />
                        </th>
                        <th scope="col">
                            Nom du contact
                           <input type="search" name="nom_contact" placeholder="Recherche..." />
                        </th>
                        <th scope="col">
                          <label for="typeaction">Type d'action : </label>
                            <select name="typeaction" id="typeaction">
                                <option label="..."> 
                                <option value="RDV">RDV</option>
                                <option value="Mail">Mail</option>
                                <option value="Tel.">Tel.</option></th>
                         <th scope="col">
                            <input type="submit" value="Valider" />
                        </th>
                    </tr>
                </form>
            </table>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-color">
                    <thead>
                        <tr bgcolor="#b0baf7">
                            <th>Date</th>
                            <th scope="col">Contact</th>
                            <th align="center">Entreprise</th>
                            <th align="center">Type d'action</th> 
                            <th align="center">Contenu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($action as $action){
                
                            ?>
                                <tr>
                                    <td align="center">
                                        <p><?php echo $action->act_date; ?></p>
                                    </td>
                                    <td align="center">
                                        <p><?php echo $action->con_name; ?></p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $action->act_type; ?> </p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $action->act_type; ?> </p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $action->act_contenu; ?> </p>
                                    </td>
                                </tr>
                            <?php
                            
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

