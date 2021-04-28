<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/about.css">
    <script src="./index.js"></script>
    <?php $titre="iGenius";?>
    <title><?= $titre;?></title>
</head>
<body>
    <header>
        <?php $active="about"; 
         include "./includes/nav.php";?>
    </header>
    <div class="text-banner"><h5><?= $titre;?></h5></div>
    <div class="container">
        <aside>
            <ul>
                <li><a href="#admin">Administration</a></li>
                <li><a href="#fac">Différentes facultés</a></li>
                <li><a href="#ceremony">Cerémonies et Prix</a></li>
                <li><a href="#visite">Visite guidée</a></li>
            </ul>
        </aside>
        <div class="content">
            <div id="admin">
                <h3>Administation</h3><hr> 
                <p class="text-bloc"> <b>iGenius</b> a une administration hierachique constitué comme suit :</p>
                <img class="admin-diagram"src="./images/Group.svg" alt="">
            </div><hr>
            <div id="fac">
                <h3>Differentes Facultés</h3><hr> 
                <p class="text-bloc">Au sein de notre académie, nous regorgeons plusieurs filères. 
                    <br>
                    <h4 class="fac-title">Département du Numerique</h4>
                    <ul class="list-obj">
                        <li>Génie Logiciel</li>
                        <li>Réseaux et télécommunications</li>
                        <li>Design(2D,3D,Animation,UI/UX,Graphique)</li>
                    </ul>
                    <h4 class="fac-title">Département du Digital</h4>
                    <ul class="list-obj">
                        <li>Marketing Digital</li>
                        <li>Marketing,Commerce et Vente (MCV)</li>
                        <li>Communauty Management</li>
                    </ul>
                </p>
            </div><hr>
            <div id="ceremony">
                <h3>Differentes Cérémonies et Prix</h3><hr> 
                <p class="text-bloc">Tout comme d'autres école, nous possédons une cérémonies pour l'accueil des nouveaux étudiants au début de l'année et également une cérémonie pour la rémise de diplômes de fin d'année accompagné de la remise de bourses, des offres d'emploi pour des apprenants ayant fait leurs preuves
                    <br>Comme bourses nous avons :
                    <ul class="list-obj">
                        <li>Bourse du meilleur Developpeur par <b>Microsoft</b>, <b>Android</b>, <b>Huawei</b></li>
                        <li>Bourse du meilleur infographe</li>
                        <li>Bourse du meilleure Web Designer <b>Microsoft</b></li>
                        <li>Bourse du super marketer <b>Tesla</b></li>
                        <li>Bourse du meilleure UX/UX Design <b>Microsoft</b>, <b>Android</b></li>
                    </ul>
                </p>
            </div><hr>
            <div id="visite">
                <h3>Présentation des diferents bâtiment du campus</h3><hr> 
                <p class="text-bloc">Voici un caroussel illustrant nos bâtiments.</p>
            </div>
        </div>
    </div>
</body>
</html>