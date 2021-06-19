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
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <?php $titre="Etudiant";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body>
    <!--  <br> vous etes etudiant</h5>-->
    
    <header>
        <div class="toggle_btn">
            <span></span>
        </div>
    </header>
    <div class="container">
        <div class="menu nav">
            <h4>Bienvenue <?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></h4>
            <a href="../index.php" class="logo">iGenius</a>
            <a href="#">Consulter les cours</a>
            <a href="#">Consulter les Notes</a>
            <a href="#">Inscrip.Academique</a>
            <a href="#">Ecrire une requête</a>
        </div>
        <div class="contain">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, incidunt dolore! Numquam adipisci voluptates aliquam ab ducimus expedita saepe minima, beatae eveniet est, mollitia distinctio asperiores tempore iure temporibus laboriosam?</p>
        </div>
    </div>
    <script type="text/javascript" src="./etudiant.js"></script>
</body>
</html>