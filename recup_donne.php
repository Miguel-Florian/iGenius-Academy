<?php
include "./config/db.php";
session_start();
if(isset($_POST['submit'])){
   $mail=htmlentities(trim($_POST['email']));
   $pass=htmlentities(trim($_POST['password']));
   
   if($_POST['statut']=="etudiant"){
       include "./eleve-recup.php";
   }
   else if ($_POST['statut']=="professeur"){
       include "./prof-recup.php";
   }else{
       header("Location:index.php");
   }
  
}
?>