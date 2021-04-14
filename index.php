<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="./index.js"></script>
    <?php $titre="Accueil";?>
    <title><?php echo $titre; ?></title>
</head>
<body>
    <header>
        <?php include"./includes/nav.php"; ?>
        <div class="banner">
            <div class="slider1"></div>
            <div class="slider2"></div>
            <div class="slider3"></div>
            <!--<div class="slider4"></div>
            <div class="slider5"></div>
            <div class="slider6"></div>-->
        </div>
    </header>
    <div class="article">
        <div class="message">
            <h3>Mot du Recteur</h3>
            <p><em>Chers étudiants,</em><br></p>
                <p>Au nom de Mgr Jean MBARGA, Grand Chancelier de <b>iGenius Academy</b> et en mon nom propre, je souhaite à tous  une chaleureuse bienvenue à <b>iGenius</b>. Je remercie de tout cœur Les Doyens de Facultés qui m’ont invité à prendre part à cette cérémonie  de lancement officiel de l’année académique 2021-2022  au sein des Etablissements dont ils ont la charge. A cette occasion, ils ont souhaité que je dise un mot de salutation  et d’encouragement à l’endroit des étudiants qui entament une année nouvelle.
                Chers étudiants  anciens et nouveaux, par le biais du concours, par mandat particulier ou un appel du Seigneur, vous vous trouvez désormais agrégés à la grande famille éducative de <b>iGenius</b>. Ce dont je puis vous assurer, c’est que votre présence en ces lieux marquera profondément et  à jamais votre existence. J’en parle en toutes connaissances de cause, ayant été moi-même étudiant de cette prestigieuse université. Je souhaite à chacun d’entre vous le plaisir de se sentir à l’aise au sein de cette institution. Tous nos services, comme vous le verrez, sont mobilisés à fond pour rendre votre séjour agréable à <b>iGenius</b>. Ne perdez  pas de temps ni l’objectif premier qui vous a amené ici. Car comme le rappelle opportunément la sagesse biblique,  «  en toutes choses, il faut considérer la fin ». Saisissez pleinement toutes les opportunités que  cette  maison vous offrira pour votre formation intégrale et  vous ne le regretterez jamais.
                Chers nouveaux étudiants, <b>iGenius</b> a été voulue par les Chrétiens laïcs  pour assurer le continuum de la solide formation humaine, spirituelle, intellectuelle et morale entamée au sein des Ecoles et Collèges Catholiques du Cameroun. Répondant à ce vœu, le Pape  Jean Paul II confia la mission aux Evêques de l’ACERAC (Association des Conférences Episcopales de la Région d’Afrique Centrale), la réalisation matérielle de cette université.</p>
                
                <p> Depuis 25 ans, cette Institution a déjà formé  selon son style propre, plus de 10.000 cadres très  vite absorbés par les entreprises, nos églises  et le marché de l’emploi que ce soit à l’intérieur ou à l’extérieur du continent Africain. Si l’on s’en tient aux témoignages qui ne cessent de nous parvenir, les quêteurs  de ressources humaines efficientes,  compétentes et surtout moralement bien structurées, espèrent les retrouver parmi les produits finis de cette Université. Laissez-moi vous avouer que le secret de cette sollicitation pérenne n’est rien d’autre que la formation intégrale que vous recevrez dans cette institution. Cette formation est adossée aux principes à la fois simples et efficaces que sont : l’assiduité aux cours,  le travail personnel acharné,  la participation aux activités para-académiques dans le cadre des clubs mouvements et cercles de réflexion ; sans oublier la foi en Dieu qui permet aux pauvres créatures humaines de  transcender leurs contingences  pour se hisser au niveau des projets divins.
                La nouvelle équipe rectorale qui se met progressivement  en place vous souhaite la grâce des commencements  et vous assure sa pleine disponibilité à vous accompagner tout au long de cette année académique.
                Considérant  le chemin parcouru par <b>iGenius</b> durant son pèlerinage historique et ce que nous ressentons comme mutations à l’œuvre dans le monde de ce temps, nous n’hésiterons pas à oser et à innover pour le plus grand bien de nos étudiants que vous êtes. Enracinés dans le terreau de la foi et de nos traditions les meilleurs, rassurés ces paroles de notre Seigneur Jésus : « n’ayez pas peur », « avancez au large », «  Je suis avec vous jusqu’à la fin des temps », nous nous efforcerons de vous pousser jusqu’aux extrêmes limites du savoir et de la vertu.</p>

                <p>Ceci dit, il ne me reste plus qu’à vous souhaiter à tous  une bonne année académique 2021-2022.</p>

                <p>Je Vous remercie pour votre aimable attention</p>
        </div>

            <p class="before-stat">Voici nos statistiques durant l'année dernière selon les différents niveaux de formation !</p>
        
        <div class="stat">
            <div class="group bts">
                <p class="cape"><i class="las la-graduation-cap la-4x"></i><h3>BTS</h3></p>
                <p id="compteur">0%</p>
                <p class="up"><i class="las la-long-arrow-alt-up"></i> Une hausse de: <b>+2.65%</b></p>
            </div>
            <div class="group licence">
                <p class="cape"><i class="las la-graduation-cap la-4x"></i><h3>Licence</h3></p>
                <p id="compteur1">0%</p>
                <p class="up"><i class="las la-long-arrow-alt-down"></i> Une baisse de: <b>- 0.12%</b></p>
            </div>
            <div class="group master1">
                <p class="cape"><i class="las la-graduation-cap la-4x"></i><h3>Master I</h3></p>
                <p id="compteur2">0%</p>
                <p class="up"><i class="las la-long-arrow-alt-up"></i> Une hausse de: <b>+2.65%</b></p>
            </div>
            <div class="group master2">
                <p class="cape"><i class="las la-graduation-cap la-4x"></i><h3>Master II</h3></p>
                <p id="compteur3">0%</p>
                <p class="up"><i class="las la-long-arrow-alt-up"></i> Une hausse de: <b>+1.5%</b></p>
            </div>
        </div>
        <div class="newsletter">
            <div class="form">
                <p class="newsletter-title-form">Souscrire à notre newsletters </p>
                <?php include "./includes/newsletter.php";?>
            </div>
        </div>
        <div class="footer">
            <?php include "./includes/footer.php";?>
        </div>
    </div>

    <script>
    var n = 95; // Nombre final du compteur
    var cpt = 0; // Initialisation du compteur
    var duree = 2; // Durée en seconde pendant laquel le compteur ira de 0 à 15
    var delta = Math.ceil((duree * 1000) / n); // On calcule l'intervalle de temps entre chaque rafraîchissement du compteur (durée mise en milliseconde)
    var node =  document.getElementById("compteur") // On récupère notre noeud où sera rafraîchi la valeur du compteur
    
    function countdown() {
    node.innerHTML = ++cpt+"%";
    if( cpt < n ) { // Si on est pas arrivé à la valeur finale, on relance notre compteur une nouvelle fois
        setTimeout(countdown, delta);
    }
    }
     setTimeout(countdown, delta);
    </script>
</body>
</html>