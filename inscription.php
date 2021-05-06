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
    <link rel="stylesheet" href="./css/inscription.css">
    <?php $titre="Inscription";?>
    <title>iGénius | <?=$titre;?></title>
</head>
<body>
    <div class="linktohome">
        <a href="./index.php" class="backtohome"></a>
    </div>
    <div class="form">
        <h3>Cette page est accesible pour tous étudiants !</h3>
        <form action=""method="post">
            <div class="first-row">
                <div class="input-text">
                    <i class="las la-user la-2x"></i><input type="text" name="nom" id="nom" placeholder="Enter votre nom">
                </div>
                <div class="input-text">
                    <i class="las la-user la-2x"></i><input type="text" name="nom" id="nom" placeholder="Enter votre prenom">
                </div>
            </div>
            <div class="first-row">
                <div class="input-level"><label for="level">Selectionner votre niveau</label>
                     <select>
                        <option value="master2">Master 2</option>
                        <option value="master1">Master 1</option>
                        <option value="licence">Licence</option>
                        <option value="bts">Bts</option>
                    </select>
                </div>
                <div class="input-filiere">
                    <label for="level">Selectionner votre filière</label>
                     <select>
                        <option value="master2">Informatique</option>
                        <option value="master1">Marketing Digital</option>
                        <option value="licence">Design 2D / 3D</option>
                        <option value="bts">UX/UI Design</option>
                    </select>
                </div>
            </div>
            <div class="input-group">
                <input type="submit" name="submit" value="S'inscrire">
            </div>
        </form>
    </div>
</body>
</html>