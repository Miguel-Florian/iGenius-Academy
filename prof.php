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
    <link rel="stylesheet" href="./css/prof.css">
    <?php $titre="Professeur";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body>
    <h5>Bonjour <!--<?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?>-->  <br> vous etes professeur</h5>
</body>
</html>