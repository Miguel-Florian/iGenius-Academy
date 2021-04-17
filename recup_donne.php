<?php
$connexion = new PDO("mysql:host=127.0.0.1:3308;dbname=igenius","root","");
if(isset($_POST['submit'])){
   $mail=htmlentities(trim($_POST['email']));
   $pass=htmlentities(trim($_POST['password']));
   
   $query="SELECT * FROM etudiants WHERE email='{$mail}' && matricule ='{$pass}' ";
   $select_user_query=mysqli_query($connexion,$query);
   if(!($select_user_query)){
       die("<b>Query Failed</b>".mysqli_error($connexion));
   }
   while($row=mysqli_fetch_array($select_user_query)){
        $db_nom = $row['nom'];
        echo $db_nom;
   }

}
?>