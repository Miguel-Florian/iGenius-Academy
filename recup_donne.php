<?php
include "./config/db.php";
if(isset($_POST['submit'])){
   $mail=htmlentities(trim($_POST['email']));
   $pass=htmlentities(trim($_POST['password']));
   
   $query="SELECT * FROM etudiants WHERE email='{$mail}' && matricule ='{$pass}' ";
   $select_user_query=mysqli_query($connexion,$query);
   if(!($select_user_query)){
       die("<b>Query Failed</b>".mysqli_error($connexion));
   }
   while($row=mysqli_fetch_array($select_user_query)){
       //echo($row['id']." ".$row['Nom']." ".$row['Prenom']." ".$row['Email']);
        //var_dump($row);
        $db_email=$row["Email"];
        $db_password=$row["Matricule"];
    }
        if($mail!==$db_email && $pass!==$db_password){
            header("Location:error.php");
        }else if($mail==$db_email && $pass==$db_password){
            header("Location:contact.php");
        }else{
             header("Location:index.php");
        }

}
?>