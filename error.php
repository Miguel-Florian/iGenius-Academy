<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/error.css">
    <?php $titre="Error";?>
    <title>Connexion | <?=$titre;?> </title>
</head>
<body>
    <div class="container">
        <div class="database-failed">
            <p><img src="./images/vector.png" alt="database_failed"><h1>Connexion à la base de donnée echouée !</h1></p>
            <h2>Veuillez verifier vos accès ou contacter l'administrateur pour plus d'informations.</h2>
            <div class="link"><a href="connexion.php">Se connecter</a></div>
        </div>
    </div>
</body>
</html>