<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/etudiant.css">
    <scrip src="index.js"></scrip>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <?php $titre="Etudiant";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand"><h1><span class="lab la-accusoft"></span>iGenius</h1></div>
        <div class="sidebar-menu">
            <ul class="container-onglets">
                <!--<li class="onglets active">
                    <a href="" class="onglets active" data-anim="1"><span class="las la-igloo"></span><span>Dashboard</span></a>
                 </li>-->
                 <li>
                    <a href=""class="onglets active"data-anim="1"><span class="lar la-clipboard"></span><span>Consulter les notes</span></a>
                 </li>
                 <li>
                    <a href=""class="onglets"data-anim="2"><span class="las la-book-open"></span><span>Consulter les cours</span></a>
                 </li >
                 <li>
                    <a href=""class="onglets"data-anim="3"><span class="las la-file-invoice"></span><span>Ecrire une requete</span></a>
                 </li>
                 <li>
                    <a href=""class="onglets"data-anim="4"><span class="lab la-wpforms"></span><span>Inscription académique</span></a>
                 </li> 
                 <li>
                    <a href=""class="onglets"data-anim="5"><span class="las la-cog"></span><span>Settings</span></a>
                 </li>  
            </ul>
        </div>
    </div>
    <div class="main-content">
        <header>
            <h1><label for=""><span class="las la-bars"></span></label>Dashboard</h1>
            <div class="search-wrapper">
                <span class="las la-search"></span>
                <input type="search" name="search" id="search" placeholder="Recherche ..."/>
            </div>
            <div class="user-wrapper">
                <!-- img de l'user qu'il pourra download depuis sa machine <img src="" alt="" srcset="" width="40px" height="40px">-->
            </div>
            <div class="user-name">
                <h4>Miguel</h4>
                <small>Etudiant</small>
            </div>
        </header>
        <main>
            <div class="cards">
                <div class="card-single">
                    <div>
                        <h3>79</h3>
                        <span>Etudiants</span>
                    </div>
                    <div>
                        <span class="las la-users"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>54</h3>
                        <span>Connectés</span>
                    </div>
                    <div>
                        <span class="las la-globe-africa"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>3</h3>
                        <span>Niveau</span>
                    </div>
                    <div>
                        <span class="las la-level-up-alt"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h3>Informatique</h3>
                        <span>Filière</span>
                    </div>
                    <div>
                        <span class="las la-university"></span>
                    </div>
                </div>
            </div>
            <div class="contenu activeContenu" data-anim="1">
                <h2>Conculter les notes</h2>
            </div>
            <div class="contenu" data-anim="2">
                <h2>Conculter les cours</h2>
            </div>
            <div class="contenu" data-anim="3">
                <h2>Ecrire une requete</h2>
            </div>
            <div class="contenu" data-anim="4">
                <h2>Inscription academique</h2>
            </div>
            <div class="contenu" data-anim="5">
                <h2>Settings</h2>
                <div class="settings">
                    <div class="setting-droit">
                        <label for="nom">Nom :</label><span class="set">&emsp;&emsp;&emsp;&emsp;&emsp;&ensp; Miguel</span><br>
                        <label for="prenom">Prenom :</label><span class="set">&emsp;&emsp;&emsp;&emsp;Florian</span><br>
                        <label for="matricule">Matricule :</label><span class="set">&emsp;&emsp;&emsp;&nbsp;170421</span><br>
                    </div>
                    <div class="setting-gauche">
                        <label for="email">Email :</label><span class="set">&emsp;&emsp;&emsp;&ensp;migflor04@gmail.com</span><br>
                        <label for="filiere">Filiere :</label><span class="set">&emsp;&emsp;&emsp;&nbsp;Informatique</span><br>
                        <label for="niveau">Niveau :</label><span class="set">&emsp;&emsp;&emsp;3</span><br>
                    </div>
                </div>
            </div>

        </main>
    </div>
    <script>
        const onglets = document.querySelectorAll(".onglets");
        const contenu = document.querySelectorAll(".contenu");
        let index = 0;

        onglets.forEach((onglet) => {
        onglet.addEventListener("focus", () => {
            if (onglet.classList.contains('active')) {
            return;
            } else {
            onglet.classList.add('active');
            }
            index = onglet.getAttribute('data-anim');
            console.log(index);
            for (i = 0; i < onglets.length; i++) { 
            if (onglets[i].getAttribute('data-anim') != index) {
                onglets[i].classList.remove('active');
            }
            }
            for(j=0;j<contenu.length;j++){
            if(contenu[j].getAttribute('data-anim')==index){
                contenu[j].classList.add('activeContenu'); 
            }else{
                contenu[j].classList.remove('activeContenu');
            }
            }
        });
        });
    </script>
</body>
</html>