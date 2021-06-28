<?php
ob_start();
session_start();
setcookie('prof',$_SESSION['prenom']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prof.css">
    <?php $titre="Professeur";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body>
    <header>
        <h4>Bonjour Prof. <?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></h5>
    </header>
</body>
</html>