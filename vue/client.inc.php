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
                <form  action="index.php?client" method="post">
                    <tr>
                        <th scope="col">
                           <input type="search" name="q" placeholder="Recherche..." />
                            <input type="submit" value="Valider" />
                        </th>
                        <th scope="col">
                            <a href="index.php?ajoutclient">Ajouter un client</a>
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
                        <tr bgcolor="#f0f8ff">
                            <th>nom</th>
                            <th scope="col">adresse</th>
                            <th align="center">patron</th>
                            <th align="center">nombre d'employe</th>
                            <th align="center">Contact</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($client as $client){
                            if (isset($client->nsc_frm_id)){
                            }
                            else {
                            ?><form action="index.php?client" method="post">
                                <tr>
                                    <td align="center">
                                        <p><?php echo $client->nom; ?></p>
                                    </td>
                                    <td align="center">
                                        <p><?php echo $client->ntr_adress; ?></p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $client->ntr_boss; ?> </p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $client->ntr_nbEmploye; ?> </p>
                                    </td>
                                    <td align="center">
                                        <button type="submit" value="<?php echo $client->ntr_id;?>" name="entreprise" >Afficher</button>
                                    </form>
                                    </td>
                                </tr>
                            <?php
                            }  
                        } 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div><?php
if($contact !== null) {  ?>
   <div class="container">
        <div class="row">
            <div class="table-responsive">
                <table class="table table-hover table-bordered table-color">
                    <thead>
                        <tr bgcolor="#f0f8ff">
                            <th>nom du contact</th>
                            <th scope="col">n° de téléphone</th>
                            <th align="center">Mail</th>                           
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($contact as $contact){
                            ?>
                                <tr>
                                    <td align="center">
                                        <p><?php echo $contact->con_name; ?></p>
                                    </td>
                                    <td align="center">
                                        <p><?php echo '0'; echo $contact->con_phone; ?></p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $contact->con_mail; ?> </p>
                                    </td>
                                </tr>
                            <?php
                            }
                        }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


