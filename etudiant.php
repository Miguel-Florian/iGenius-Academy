<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/etudiant.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <?php $titre="Etudiant";?>
    <title>Dashboard | <?=$titre;?></title>
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-brand"><h1><span class="lab la-accusoft"></span>iGenius</h1></div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="" class="active"><span class="las la-igloo"></span><span>Dashboard</span></a>
                 </li>
                 <li>
                    <a href=""><span class="lar la-clipboard"></class=></span><span>Consulter les notes</span></a>
                 </li>
                 <li>
                    <a href=""><span class="las la-book-open"></span><span>Consulter les cours</span></a>
                 </li>
                 <li>
                    <a href=""><span class="las la-file-invoice"></span><span>Ecrire une requete</span></a>
                 </li>
                 <li>
                    <a href=""><span class="lab la-wpforms"></span><span>Inscription académique</span></a>
                 </li> 
                 <li>
                    <a href=""><span class="las la-cog"></span><span>Settings</span></a>
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

            <!--<div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recents Projects</h3>
                            <button>See all</button>
                        </div>
                        <div class="card-body">
                            <table>
                                <thead>
                                        <tr>
                                            <td>Projects Title</td>
                                            <td>Departement</td>
                                            <td>Status</td>
                                        </tr>
                                </thead>
                                <tbody>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>Web Development</td>
                                            <td>
                                                <span class="status"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Infograph</td>
                                            <td>Infograph Team</td>
                                            <td><span class="status"></span>
                                            pending
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>UI/UX Design</td>
                                            <td>Web Development</td>
                                            <td>
                                                <span class="status"></span>
                                                Review
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Mobile Development</td>
                                            <td>Frontend</td>
                                            <td>
                                                <span class="status"></span>
                                                in progress
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Infograph</td>
                                            <td>Infograph Team</td>
                                            <td><span class="status"></span>
                                            pending
                                        </td>
                                        </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>-->
        </main>
    </div>
</body>
</html>