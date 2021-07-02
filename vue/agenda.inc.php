<?php
/**
 * Vue de la page Agenda
 *
 * @author Petit Guillaume
 * @package default
 */
?>


<body>
	<center>
		<form acion="index.php?agenda" method="POST" name="dt" >
			<select name="mois" id="mois" onChange="change()" class="liste">
				<?php
				for($i=1;$i<13;$i++){
					echo '<option value="'.$i.'"';
					if($i==$mois)
					echo ' selected ';
					echo '>'.$mois_fr[$i].'</option>';
				}
				?>
			</select>
			<select name="annee" id="annee" onChange="change()" class="liste">
				<?php
				for($i=2000;$i<2035;$i++){
					echo '<option value="'.$i.'"';
					if($i==$annee)
					echo ' selected ';
					echo '>'.$i.'</option>';
				}
				?>
			</select>
		</form>

	<table class="tableau">
		<caption><?php echo $titre ;?></caption>
			<tr>
				<th>Lun</th>
				<th>Mar</th>
				<th>Mer</th>
				<th>Jeu</th>
				<th>Ven</th>
				<th>Sam</th>
				<th>Dim</th>
			</tr>
			<tr>
			<?php
			//echo $y;
			$case=0;
			if($x>1)
				for($i=1;$i<$x;$i++){
					echo '<td class="desactive">&nbsp;</td>';
					$case++;
				}

				for($i=1;$i<($l_day+1);$i++){
					$f=$y=date("N", mktime(0, 0, 0, $mois,$i , $annee));
					$da=$annee."-".$mois."-".$i;
					$lien=$lien_redir;
					//$lien.="?dt=".$da;
					echo "<td";
					 
					if(in_array($da, $list_spe)){
						echo " class='special' onmouseover='over(this,1,2)'";
						if($clic==1||$clic==2){ 
							echo " onclick='go_lien(\"$lien\")' ";	
					}}
					else if(in_array($f, $list_fer)){
						echo " class='ferier' onmouseover='over(this,2,2)'";
						if($clic==1)
						echo " onclick='go_lien(\"$lien\")' ";
					}
					else{
						echo" onmouseover='over(this,0,2)' ";
						if($clic==1)
						echo " onclick='go_lien(\"$lien\")' ";
					}
					echo" onmouseout='over(this,0,1)'>$i</td>";
					$case++;
					if($case%7==0)
						echo "</tr><tr>";
				}
				if($y!=7)
					for($i=$y;$i<7;$i++){
						echo '<td class="desactive">&nbsp;</td>';
					}
			?>
			</tr>
	</table>
	</center>

   <?php 
if($action != null) {  ?>
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
                        foreach ($action as $action){
                            ?>
                                <tr>
                                    <td align="center">
                                        <p><?php echo $action->con_name; ?></p>
                                    </td>
                                    <td align="center">
                                        <p><?php echo '0'; echo $action->con_phone; ?></p>
                                    </td>
                                    <td align="center">
                                        <p> <?php echo $action->con_mail; ?> </p>
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

</body>

<script type="text/javascript">
function change()
{
	document.dt.submit();
}
	function over(this_,a,t)
{
	<?php 
	echo "var c2=['$ccl2[0]','$ccl2[1]','$ccl2[2]'];";
	?>
	var col;
	if(t==2)
		this_.style.backgroundColor=c2[a];
	else
		this_.style.backgroundColor="";
}
function go_lien(a)
{
	top.document.location=a;
}
	</script>
							<form action="index.php?agenda" method="POST">
								<button type="submit" value="<?php echo $da;?>" name="rendez-vous"><?php echo $da;?></button>
							</form>