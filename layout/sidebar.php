<!-- Sidebar -->
<nav class="navbar">

    <!-- Sidebar header -->
    <div class="navbar-brand">
        <div class="logo--small">
            <?php require_once __DIR__ . "/../src/svg/logo--small.html"; ?>
        </div>
    </div>
    
    <!-- Sidebar menu -->
    <div class="sidebar-menu">
        <ul class="nav flex-column">
            <!-- connected user username -->
            <li class="text-secondary">
                <p>Olivier Valette</p>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="index.html"> <i class="fa fa-fw fa-sign-out-alt"></i>&nbsp;Déconnexion </a>
            </li>
        </ul>
        <hr>
        
        <span class="text-secondary">Gestion</span>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark" href="art-board.html"> <i class="fa fa-fw fa-chalkboard-teacher"></i>&nbsp;Art board </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="art-ists.html"> <i class="fa fa-fw fa-id-card"></i>&nbsp;Artistes </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="art-movements.html"> <i class="fa fa-fw fa-palette"></i>&nbsp;Mouvements </a>
            </li>
        </ul>
        
        <span class="text-secondary">Extras</span>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-dark" href="404.html"> <i class="fa fa-fw fa-envelope-square"></i>&nbsp;Messagerie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="https://fr.wikipedia.org/wiki/Portail:Peinture"> <i class="fab fa-fw fa-wikipedia-w"></i>&nbsp;Wikipédia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="404.html"> <i class="fa fa-fw fa-comment-dots"></i>&nbsp;Déposer un avis</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-dark" href="404.html"> <i class="fa fa-fw fa-ambulance"></i>&nbsp;Support</a>
            </li>
        </ul>
    </div>

</nav>