<nav id="nav">
            <div class="logo"><img src="./images/iGenius-100.png" alt=""></div>
                <div class="nav-link">
                    <ul>
                        <li class="link <?php if($_SERVER['SCRIPT_NAME']==='/iGenius Academy/index.php'):?>active <?php endif;?>"id="index"><a href= "index.php">Accueil</a></li>
                        <li class="link <?php if($_SERVER['SCRIPT_NAME']==='/iGenius Academy/about.php'):?>active <?php endif;?>"id="about"data-anim="2"><a href="about.php">iGenuis</a></li>
                        <li class="link <?php if($_SERVER['SCRIPT_NAME']==='/iGenius Academy/connexion.php'):?>active <?php endif;?>"id="connexion"data-anim="3"><a href="connexion.php">Connexion</a></li>
                        <li class="link <?php if($_SERVER['SCRIPT_NAME']==='/iGenius Academy/contact.php'):?>active <?php endif;?>"id="contact"data-anim="4"><a href="contact.php">Contact</a></li>
                    </ul>
                </div>
</nav>
