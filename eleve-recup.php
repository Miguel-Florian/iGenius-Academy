<?php
$query="SELECT * FROM etudiants WHERE email='{$mail}' && matricule ='{$pass}' ";
   $select_user_query=mysqli_query($connexion,$query);
   if(!($select_user_query)){
       die("<b>Query Failed</b>".mysqli_error($connexion));
   }
   while($row=mysqli_fetch_array($select_user_query)){
       //echo($row['id']." ".$row['Nom']." ".$row['Prenom']." ".$row['Email']);
        //var_dump($row);
        $db_nom=$row["Nom"];
        $db_prenom=$row["Prenom"];
        $db_email=$row["Email"];
        $db_password=$row["Matricule"];
    }
        if($mail!==$db_email && $pass!==$db_password){
            header("Location:error.php");
        }else if($mail==$db_email && $pass==$db_password){

            $_SESSION['nom']=$db_nom;
            $_SESSION['prenom']=$db_prenom;
            $_SESSION['email']=$db_email;
            header("Location:etudiant.php");
        }else{
             header("Location:index.php");
        }
?>