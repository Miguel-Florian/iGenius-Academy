<?php
ob_start();
session_start();
    setcookie('user',$_SESSION['prenom'],time()+60*60*72);
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
    <!--<h5>Bonjour <?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?>  <br> vous etes etudiant</h5>-->
    
    <header>
        <div class="toggle_btn">
            <span></span>
        </div>
    </header>
    <div class="menu nav">
        <a href="#" class="logo">iGenius</a>
        <a href="#">Consulter les cours</a>
        <a href="#">Consulter les Notes</a>
        <a href="#">Ins.Academique</a>
        <a href="#">Settings</a>
    </div>
    <script type="text/javascript" src="./etudiant.js"></script>
</body>
</html>