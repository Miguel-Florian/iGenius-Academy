<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="./index.js"></script>
    <?php $titre="Accueil";?>
    <title><?php echo $titre; ?></title>
</head>
<body>
    <header>
        <div class="banner">
           <div class="slider1">
                <?php include"./includes/nav.php";?>
                    <div class="text-banner">
                        <h1>Travail, Assiduité, Excellence</h1>
                        <p>Toujours au service de la méritocratie et de l’amour du travail <br>
                        Nous prônons l'esprit de recherche permanente, l'esprit d'équipe et de solidarité</p>
                    </div>
            </div>
            <div class="slider2">
                <?php include"./includes/nav.php";?>
                <div class="text-banner">
                        <h1>Bourses et Diplomes </h1>
                        <p>Vous obtindrez des bourses venant des grandes écoles <br> à la fin de cursus académique </p>
                        <p>Contacter nous !</p>
                </div>
            </div>
            <div class="slider3">
                <?php include"./includes/nav.php";?>
                <div class="text-banner">
                        <h1>Benéficiez d’un suivi progressif</h1>
                        <p>Inscrivez-vous afin d’étudier et d’améliorer vos <br> compétences dans les domaines du numerique <br> et du digital</p>
                </div>
            </div>
        </div>
    </header>
    <div class="article">
        <div class="message">
            <h4>Mot de bienvenue</h4>
                <p>À l’occasion de la rentrée universitaire 2020-2021, je tiens à souhaiter la bienvenue aux nouveaux étudiants qui joignent les rangs de notre université ainsi qu’un excellent trimestre à vous tous qui poursuivez votre cheminement avec nous.
                La qualité de votre expérience universitaire est au cœur de nos préoccupations. Chaque jour, vos professeurs et votre université orientent leurs efforts vers votre réussite. Notre personnel dévoué et compétent est là pour vous guider et vous fournir de judicieux conseils tout au long de votre parcours.</p>
                <p>Vous avez choisi une université innovante, dynamique et créative, qui vous offre un parcours académique de qualité, basé sur un modèle de formation flexible. Cela vient avec une grande responsabilisation pour arriver à vous approprier votre projet d’études et, je vous le souhaite, à l’intégrer sans trop d’encombres dans votre vie personnelle et professionnelle.
                Aussi, je vous encourage à prendre connaissance des nombreuses ressources qui vous sont offertes et à ne pas hésiter à faire appel aux gens qui sont là pour vous. J’insiste aussi sur l’importance que nous accordons à vos commentaires. N’hésitez pas à nous parler et à nous partager votre expérience et vos impressions en tout temps Nous sommes à l’écoute.</p>
                <p>Je vous souhaite une année remplie de succès et de découvertes. Merci de nous faire confiance!</p>
                <p>Miguel Florian <br> <em>Directeur Générale</em></p>
        </div>
        <div class="atout">
            <h2>Nos différents atouts</h2>
            
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
    $(function(){
		$('#nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
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