<?php
/**
 * Fichier contenant la barre de naivigation
 * Appelé sur toutes les pages excepté la page de connexion
 * @author Petit Guillaume
 * @package default
 */
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="inc/css/bootstrap.min.css" rel="stylesheet">
	<link href="inc/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="inc/css/style.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<title>Gestion Client</title>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
		<div class="navbar-header">
	 		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
	  		</button>
	  		<a class="navbar-brand" href="index.php">Gestion Client</a>
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
	  		<ul class="nav navbar-nav">
				<li><a href="index.php">Accueil</a></li>
				    <li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Entreprise<b class="caret"></b> </a>
        					<ul class="dropdown-menu">
          						<li><a href="index.php?client">Client</a></li>
        						<li><a href="index.php?prospect">Prospect</a></li>
       						</ul>
      				</li>
      				<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Action Commercial<b class="caret"></b> </a>
        					<ul class="dropdown-menu">
          						<li><a href="index.php?rechercheaction">Action Commercial</a></li>
        						<li><a href="index.php?ajoutcom">Ajout Action Commercial</a></li>
       						</ul>
      				</li>
				<li><a href="index.php?agenda">Agenda</a></li>
	   	    </ul>
	  		<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php?deco"><span class="fa fa-user-times"></span> Déconnexion</a></li>
	  		</ul>
		</div>
    </div>
</nav>






<div class="container-fluid info">
    <div class="row">
        <div class="col-md-4 col-md-offset-2 col-xs-8 col-xs-offset-2">
            <p class="p-header">
                <?php
                    echo "Utilisateur connecté : ".$_SESSION['nom'];
                ?>
            </p>
        </div>
    </div>
</div>

