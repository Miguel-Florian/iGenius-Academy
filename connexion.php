<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./css/connexion.css">
    <script src="./index.js"></script>
    <?php $titre="Connexion";?>
    <title><?= $titre;?></title>
</head>
<body>
    <header>
        <?php include"./includes/nav.php";?>
    </header>
    <div class="text-banner"><h5><?= $titre;?></h5></div>
    <h2>Veuillez bien renseigner vos accès !</h2>
    <div class="form">
        <form action=""method="">
            <div class="input-group">
                <i class="las la-envelope la-2x"></i><input type="email" name="email" id="email" placeholder="Enter votre adresse email">
            </div>
            <div class="input-group">
                <i class="las la-key la-2x"></i><input type="password" name="password" id="password" placeholder="Entrer votre mot de passe (matricule)">
            </div>
            <div class="input-group">
                <input type="submit" value="Se connecter">
            </div>
        </form>
    </div>
</body>
</html>