<?php
ob_start();
session_start();
setcookie('user',$_SESSION['prenom']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/etudiant.css">
    <scrip src="index.js"></scrip>
    <?php $titre="Etudiant";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body> 
<div class="container">
    <div class="nav">
        <ul>
            <li>
                <a href="../index.php">
                    <span class="icon"></span>
                    <span class="title"><h2>iGenius Academy</h2></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-home"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-tasks"></i></span>
                    <span class="title">Requetes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="far fa-file-pdf"></i></span>
                    <span class="title">Notes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="far fa-book-open"></i></span>
                    <span class="title">Cours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="far fa-prescription-bottle"></i></span>
                    <span class="title">Inscription</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="far fa-prescription-bottle"></i></span>
                    <span class="title">Communiqué</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fal fa-question-circle"></i></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <span class="title">Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main">
    <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"></div>
            <div class="search">
                <label for="search">
                    <input type="text" name="search" id="search" placeholder="Rechercher ...">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </label>
            </div>
            <div class="user">
                <img src="../images/user.jpg" alt="" width="40px" height="40px" />
            </div>
    </div>
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">100</div>
                <div class="cardName">Etudiants</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">3</div>
                <div class="cardName">Niveau</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-level" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">20</div>
                <div class="cardName">En ligne</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-online" aria-hidden="true"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">INF</div>
                <div class="cardName">Parcours-type</div>
            </div>
            <div class="iconBox">
                <i class="fa fa-type" aria-hidden="true"></i>
            </div>
        </div>
    </div>

    <div class="informations">
        <div class="details-etudiant">
            <div class="title-info"><h3>Détails sur l'étudiant</h3></div>
            <div class="row-information">
                <div class="nom">Nom : <span>Noumowe Ngueukam</span></div>
            </div>
            <div class="row-information">
                <div class="nom">Prénom: <span>Miguel Florian</span></div>
            </div>
            <div class="row-information">
                <div class="nom">Niveau: <span>Licence 3</span></div>
            </div>
            <div class="row-information">
                <div class="nom">Filière: <span>Informatique</span></div>
            </div>
            <div class="row-information">
                <div class="nom">Sexe: <span>Masculin</span></h3></div>
            </div>
        </div>

        <div class="timetable">
            <div class="title-info"><h3>Empoi de temps</h3></div>
            <table>
                <thead>
                    <tr>
                        <td>Jour</td>
                        <td>Heure(debut-fin)</td>
                        <td>Matières</td>
                    </tr>
                </thead>
                <tbody>
                    <tr class="color">
                        <td>Lundi</td>
                        <td>07h-16h</td>
                        <td>UI/UX Design, Web Design</td>
                    </tr>
                    <tr>
                        <td>Mercredi</td>
                        <td>12h-18h</td>
                        <td>Javascript, Python, Java</td>
                    </tr>
                    <tr class="color">
                        <td>Jeudi</td>
                        <td>08h-19h</td>
                        <td>ReactJS, Django, Php</td>
                    </tr>
                    <tr>
                        <td>Samedi</td>
                        <td>07h-17h</td>
                        <td>ReactJS, Django, Php</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<script>
    function toggleMenu(){
        let toggle=document.querySelector('.toggle');
        let nav=document.querySelector('.nav');
        let main=document.querySelector('.main');
        toggle.classList.toggle('active');
        nav.classList.toggle('active');
        main.classList.toggle('active');
    }
</script>
   <!-- <header>
        <div class="toggle_btn">
            <span></span>
        </div>
    </header>
    <div class="container">
        <div class="menu nav">
            <h4>Bienvenue <?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></h4>
            <a href="../index.php" class="logo">iGenius</a>
            <a href="#cours" class="cours">Consulter les cours</a>
            <a href="#notes" class="notes">Consulter les notes</a>
            <a href="#ins" class="aca">Inscrip.Academique</a>
            <a href="#requete" class="req">Ecrire une requête</a>
        </div>
        <div class="contain">
            <div class="content">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, incidunt dolore! Numquam adipisci voluptates aliquam ab ducimus expedita saepe minima, beatae eveniet est, mollitia distinctio asperiores tempore iure temporibus laboriosam?</p>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="./etudiant.js"></script>-->
















































</body>
</html>