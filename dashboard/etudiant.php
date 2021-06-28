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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="../css/etudiant.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
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
                    <span class="icon"><img src="../images/iGenius-50.png" alt=""></span>
                    <span class="title"><h2>iGenius Academy</h2></span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-home"></i></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-tasks"></i></span>
                    <span class="title">Requetes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-clipboard"></i></span>
                    <span class="title">Notes</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-file-pdf"></i></span>
                    <span class="title">Cours</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="lab la-wpforms"></i></span>
                    <span class="title">Inscription</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-comment"></i></span>
                    <span class="title">Communiqué</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-question-circle"></i></span>
                    <span class="title">Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="icon"><i class="las la-lock"></i></span>
                    <span class="title">Déconnexion</span>
                </a>
            </li>
        </ul>
    </div>
</div>
<div class="main">
    <div class="topbar">
            <div class="toggle" onclick="toggleMenu();"><i class="las la-bars la-3x"></i></div>
            <div class="search">
                <label for="search">
                    <input type="text" name="search" id="search" placeholder="Rechercher ...">
                    <i class="las la-search la-1x"></i>
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
                <i class="las la-users"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">3</div>
                <div class="cardName">Niveau</div>
            </div>
            <div class="iconBox">
                <i class="las la-shoe-prints"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">20</div>
                <div class="cardName">En ligne</div>
            </div>
            <div class="iconBox">
                <i class="las la-globe"></i>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">INF</div>
                <div class="cardName">Parcours-type</div>
            </div>
            <div class="iconBox">
                <i class="las la-university"></i>
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

<script src="./etudiant.js"></script>
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