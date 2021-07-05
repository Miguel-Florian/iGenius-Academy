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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <scrip src="index.js"></scrip>
    <?php $titre="Etudiant";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body> 
<div class="container">
    <?php include "../includes/navigation.php" ?>
</div>
<div class="main">
    <?php include "../includes/TopBar.php"?>
    <?php include "../includes/CardBox.php"?>
    <div class="informations"><?php include "../includes/content.php"?></div>

</div>

<script src="./Etudiant.js"></script>
<script src="./loadingAsyn.js"></script>
</body>
</html>