<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/index.css">
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
                        <div class="signup-link"><a href="#">S'inscrire</a></div>
                    </div>
            </div>
            <!--<div class="slider2">
                <?php include"./includes/nav.php";?>
                <div class="text-banner">
                        <h1>Bourses et Diplomes </h1>
                        <p>Vous obtiendrez des bourses venant des grandes écoles <br> à la fin de cursus académique </p>
                        <p>Contacter nous !</p>
                </div>
            </div>
            <div class="slider3">
                <?php include"./includes/nav.php";?>
                <div class="text-banner">
                        <h1>Benéficiez d’un suivi progressif</h1>
                        <p>Inscrivez-vous afin d’étudier et d’améliorer vos <br> compétences dans les domaines du numerique <br> et du digital</p>
                </div>
            </div>-->
        </div>
    </header>
    <div class="article">
        <div class="bg-lightblue">
            <div class="method">
                <h2>Methodes de travail</h2>

                <div class="first-row">
                        <div class="card">
                            <div class="card text ">
                                <i class="las la-wave-square la-2x"></i>
                                <h4 class="mb-2">Fréquence</h4>
                                <p>Nous vous proposons des fréquences de travail flexibles à votre emploie de temps</p>
                            </div>
                        </div>

                    <div class="card">
                            <div class="card text ">
                                <i class="las la-box-open la-2x"></i>
                                <h4 class="mb-2">Production</h4>
                                <p>Nous attendons de nos étudiants d’avoir un meilleure rendement de production</p>
                            </div>
                    </div>

                    <div class="card">
                        <div class="card text ">
                            <i class="las la-money-check-alt la-2x"></i>
                            <h4 class="mb-2">Frais De Scolarité</h4>
                            <p>Elle varie d’un niveau à un autre et d’une catégorie de formation à une autre</p>
                        </div>
                    </div>
                </div>
                <div class="first-row">
                        <div class="card">
                            <div class="card text ">
                                <i class="las la-assistive-listening-systems la-2x"></i>
                                <h4 class="mb-2">Service Étudiants</h4>
                                <p>Pour tous vos requetes ou plainte, veuillez vous rapprocher du service adapté</p>
                            </div>
                        </div>

                    <div class="card">
                            <div class="card text ">
                                <i class="las la-cloud-upload-alt la-2x"></i>
                                <h4 class="mb-2">Cloud</h4>
                                <p>Au sein de l’academie,chaque étudiant possède un espace de stockage offert.</p>
                            </div>
                    </div>

                    <div class="card">
                        <div class="card text ">
                            <i class="las la-clock la-2x"></i>
                            <h4 class="mb-2">Horaires</h4>
                            <p>Pour des étudiants en cour du jour cela va de <b>Lundi à Vendredi de 8h à 16h</b></p>
                        </div>
                    </div>
                </div>
                

            </div>
        </div>
        
        <div class="bg-light">
            <div class="section light">
                <div class="text-section">
                    <h2 class="section-title">Nous sommes l’academie la plus avancée dans le numerique et le digital .</h2>
                    <p class="section-paragraph">
                        Grâce à l'expertise de nos professeurs, vous aurez un suivi accémique selon les dernieres mise à jour et techniques appropriés. Et ceci dans un environnement adéquat à l'apprenstissage.
                    </p>
                </div>
                <div class="section-image"> <img src="./images/banner-art.svg" alt=""></div>
            </div>
        </div>

        <div class="bg-lightblue bg-lightblue-padding ">
            <div class="section lightblue">
                <div class="text-section">
                    <h2 class="section-title">Bourses d'études et diplômes</h2>
                    <p class="section-paragraph second-paragraph">
                        Nous offrons des bourses d'études à tous les étudiants à la fin de chaque diplôme à des académiciens compétents. De plus durant le cour de l'année académique nous offrons également à ces derniers des stages dans des entreprises de renoms du pays. 
                    </p>
                    <div class="signup-link"><a href="#">Postuler</a></div>
                </div>
                <div class="section-image"><img src="./images/service-1.png" alt=""></div>
            </div>
        </div>


        <div class="bg-light">
            <div class="section light">
                <div class="text-section">
                    <h2 class="section-title">Un personnel expérimenté</h2>
                    <p class="section-paragraph">
                        Face à l'avenement de la pandemie <b>Covid-19</b>, l'académie met au service de tous les apprenants un cadre spatial et conforme aux règles de distanciation sociale afin de limiter la propagation du virus. 
                        Et profiter d'un système éducatif optimal face à la pandémie.
                    </p>
                </div>
                <div class="section-image"> <img src="./images/cta.svg" alt=""></div>
            </div>
        </div>

        <div class="bg-lightblue bg-lightblue-padding ">
            <div class="section lightblue">
                <div class="text-section">
                    <h2 class="section-title second-title">iGénius Academy, differente des autres</h2>
                    <p class="section-paragraph second-paragraph">
                        Nous sommes differentes des autres académies 
                        <ul class="asset">
                            <li>Flexibilité de l'emploi de temps selon la convenance de chaque academicien</li>
                            <li>Respect stricte des mesures barrières et un suivi académique continuel</li>
                            <li>Acquisition des bourses d'Etat et ds emplois dans les grandes entreprises de renoms du pays après la fin du cursus académique</li>
                        </ul>
                    </p>
                </div>
                <div class="section-image"><img src="./images/service-1.png" alt=""></div>
            </div>
        </div>

        <div class="bg-light">
            <div class="workflow">
                <h2>Avec nous,Vivez le meilleur workflow</h2>
                <div class="workflow-image"> <img src="./images/screenshot.svg" alt=""></div>
            </div>
        </div>

        <div class="bg-lightblue">
            <p class="before-stat">Nos Statistiques</p>
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
        </div>

        <div class="bg-lightblue">
            <div class="newsletter">
                <div class="form">
                    <p class="newsletter-title-form">Souscrire à notre newsletters </p>
                    <?php include "./includes/newsletter.php";?>
                </div>
            </div>
        </div>
        
        <div class="bg-light">
            <div class="partner">
                <h2>Nos partenaires officielles</h2>
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

     $(function(){
		$('#nav a').click(function(){
			$(this).parent().addClass('active').siblings().removeClass('active')	
		})
	})
</script>
</body>
</html>