<div class="topbar">
            <div class="toggle" onclick="toggleMenu();"><i class="las la-bars la-3x"></i></div>
            <div class="search">
                <label for="search">
                    <input type="text" name="search" id="search" placeholder="Rechercher ...">
                    <i class="las la-search la-1x"></i>
                </label>
            </div>
            <div class="user">
                <h5>Bienvenue <?php echo($_SESSION['nom']." ".$_SESSION['prenom']); ?></h4>
                <img src="../images/user.jpg" alt="" width="40px" height="40px" />
            </div>
    </div>