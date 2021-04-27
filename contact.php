<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="./css/contact.css">
    <script src="./index.js"></script>
    <?php $titre="Contact";?>
    <title><?= $titre;?></title>
</head>
<body>
    <header>
        <?php include"./includes/nav.php";?>
    </header>
    <div class="text-banner"><h5><?= $titre;?></h5></div>
    <div class="container">
       <div class="text">
          <p><span class="span-color">iGenius Academy</span> est situé dans la ville de Douala, sur la Rue Soudanaise à Akwa proche du bâtiment d'Orange Cameroun, nous proposons un service académique de reférence à travers le monde.</p>
          <p>Nous sommes ouvrables selon les jours et les horaires suivants :
             <ul>
                <li>De <span class="span-color">Lundi</span> à <span class="span-color">Vendredi</span> de <span class="span-color">07H</span> - <span class="span-color">18H</span></li>
                <li>Le <span class="span-color">Samedi</span> de <span class="span-color">09H</span> - <span class="span-color">15H</span></li>
             </ul>
          </p>
          <p>En cas de besoin, veuillez contacter le service client ou la direction afin de repondre à vos besoins. 
             <br><br><span class="span-color">Téléphone :  +237 256 452 563 / +237 454 541 064</span>
          </p>
          <p>Ou par ce formulaire de contact ci-contre et vous pouvez également nous suivre sur ces reseaux sociaux :</p>
           <div class="social-link">
                    <ul>
                        <li class="facebook"><i class="lab la-facebook-f la-2x"></i></li>
                        <li class="instagram"><i class="lab la-instagram la-2x"></i></li>
                        <li class="twitter"><i class="lab la-twitter la-2x"></i></li>
                        <li class="linkedin"><i class="lab la-linkedin-in la-2x"></i></li>
                        <li class="github"><i class="lab la-github la-2x"></i></li>
                        <li class="youtube"><i class="lab la-youtube la-2x"></i></li>
                       
                    </ul>
                </div>
       </div>
      <form name="" action="" onsubmit="return validateForm()" method="post">
        <h4 class="h4-color">Formulaire de contact</h4>   
        <img src="./images/iGenius-50.png" alt="iGenius">
      <table class="form-style">
            <tr>
               <td>
                  <label class="label-color">
                     Votre nom <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="text" name="name" class="long"/>
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label class="label-color">
                     Votre adresse e-mail <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="email" name="email" class="long"/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label class="label-color">
                     Message <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <textarea name="message" class="long field-textarea"></textarea>
                  <span class="error" id="errormsg"></span>
               </td>
            </tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" value="Envoyer">      
                  <input type="reset" value="Réinitialiser"> 
               </td>
            </tr>
         </table>
      </form>
</div>
    
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script>
          function validateForm()                                    
{ 
    var name = document.forms["myForm"]["name"];               
    var email = document.forms["myForm"]["email"];    
    var message = document.forms["myForm"]["message"];   
   
    if (name.value == "")                                  
    { 
        document.getElementById('errorname').innerHTML="Veuillez entrez un nom valide";  
        name.focus(); 
        return false; 
    }else{
        document.getElementById('errorname').innerHTML="";  
    }
       
    if (email.value == "")                                   
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    }else{
        document.getElementById('erroremail').innerHTML="";  
    }
   
    if (email.value.indexOf("@", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    } 
   
    if (email.value.indexOf(".", 0) < 0)                 
    { 
        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail valide"; 
        email.focus(); 
        return false; 
    } 
   
    if (message.value == "")                           
    {
        document.getElementById('errormsg').innerHTML="Veuillez entrez un message valide"; 
        message.focus(); 
        return false; 
    }else{
        document.getElementById('errormsg').innerHTML="";  
    }
   
    return true; 
}
      </script>

</body>
</html>