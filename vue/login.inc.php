<?php
/**
 * Vue de la page de connexion
 *
 * @author Petit Guillaume
 * @package default
 */
?>

<!DOCTYPE html>
    <html>
    <head>
        <meta charset="UTF-8">
        <link href="inc/css/bootstrap.min.css" rel="stylesheet">
        <link href="inc/css/style.css" rel="stylesheet">
        <script src="inc/js/bootstrap.js"></script>
        <title>Gestion Client : Connexion</title>
    </head>

    <body>

        <header>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header" style="float: left">
                        <a class="navbar-brand" href="index.php">Gestion Client</a>
                    </div>
                </div>
            </nav>
        </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-offset-2 col-md-8" style=" margin-top: 100px">
                <div class="jumbotron">
                    <h1>Gestion Client</h1>
                    <p>Connectez-vous pour accéder à l'interface de gestion des clients</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid ">
        <div class="row">
            <div class="col-md-offset-2 col-md-8">
                <div class="jumbotron">
                    <form method="post" action="index.php">
                        <div align="center" class="form-group">
                            <label for="login">Login : </label><input type="text" name="login" id="login" placeholder="identifiant">
                        </div>
                        <div align="center" class="form-group">
                            <label for="password">Mot de passe : </label><input type="password" name="password" id="password" placeholder="mot de passe">
                        </div>
                        <div align="center">
                            <button class="btn-u" type="submit" value="envoy">Connexion</button>
                        </div>
                        <?php
                        if (isset($erreur)){
                        echo "<br><div align='center'><p>$erreur</p></div>";
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>