<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/postuler.css">
    <?php $titre="Postuler";?>
    <title>iGenius | <?=$titre;?></title>
</head>
<body>
    <div class="linktohome">
        <a href="./index.php" class="backtohome"></a>
    </div>
    <div class="postuler">
        <h3>Voulez-vous postuler à une bourse ? Vous êtes au bon endroit !</h3>
        <form action="" method="post">
            <div class="input-group">
                <i class="las la-user la-2x"></i><input type="text" name="nom" id="nom" placeholder="Enter votre nom">
            </div>
            <div class="input-group">
                <i class="las la-user la-2x"></i><input type="text" name="nom" id="nom" placeholder="Enter votre prenom">
            </div>
            <div class="input-group">
                <i class="las la-envelope la-2x"></i><input type="email" name="email" id="email" placeholder="Enter votre adresse email">
            </div>
            <div class="input-group">
                <i class="las la-shoe-prints la-2x"></i><input type="text" name="level" id="level" placeholder="Enter votre niveau (Bac,Master 1,Master 2)">
            </div>
            <div class="input-group">
                <i class="las la-sms la-2x"></i><input type="text" name="bourse" id="bourse" placeholder="Eprimez la portée de votre bourse">
            </div>
            <div class="input-group">
                <input type="submit" name="submit" value="Postuler">
            </div>
        </form>
    </div>
</body>
</html>