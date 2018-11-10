<!-- HEAD -->
<?php require_once __DIR__ . "/layout/head.php"; ?>

<!-- HEADER : top navbar -->
<?php require_once __DIR__ . "/layout/header.php"; ?>

<main class="container-fluid">
    <div class="row align-items-start">
        <!-- Sidebar (colonne 1) -->
        <div class="col-2">
            <?php require_once __DIR__ . "/layout/sidebar.php"; ?>
        </div>
        <!-- Contenu (colonne 2) -->
        <div class="col-10">
            <!-- contextual header -->
            <header class="artboard__header mt-3 mb-3">
                <!-- Stats -->
                <div class="alert alert-primary lead" role="alert">
                    <strong>1493</strong> &oelig;uvres - <strong>347</strong> artistes
                </div>
                <!-- Menu -->
                <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                    <div class="nav-item">
                        <form class="form-inline my-2 my-lg-0" id="searchForm" action="#">
                            <input class="form-control mr-sm-2" type="search" placeholder="Recherche artiste/&oelig;uvre">
                        </form>
                    </div>
                    <ul class="navbar-nav ml-auto mr-2 mt-md-0">
                        <li class="nav-item">
                            <div class="input-group">
                                <a href="#" class="btn btn-dark">
                                    <span class="fa fa-print mr-2"></span> Imprimer
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="input-group">
                                <a href="art-work.html" class="btn btn-dark">
                                    <span class="fa fa-plus-circle mr-2"></span>Ajouter
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <div class="input-group">
                                <input id="file-import" type="file" class="form-control" name="awimportfn" placeholder="Fichier à importer...">
                                <label class="custom-file-label" for="file-import">
                                    <span class="fa fa-file-import mr-2"></span> Fichier à importer
                                </label>
                            </div>
                        </li>
                    </ul>
                </nav>
            </header>

            <!-- Liste des oeuvres en catalogue -->
            <div class="artboard">
                <div class="artwork__table">
                    <table class="table table-bordered table-striped table-hover table-sm" cellspacing="0" width="100%">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Auteur</th>
                            <th scope="col">Mini-bio</th>
                            <th scope="col">Titre</th>
                            <th scope="col">Année</th>
                            <th scope="col">Visuel</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody class="artwork__list">
                        <tr>
                            <td>Alechinsky, Pierre</td>
                            <td>Franco-Belgian,1927-</td>
                            <td>Ephémérides brouillées</td>
                            <td>1980</td>
                            <td><a class="btn btn-outline-success" href="../assets/Alechinsky, Pierre (Franco-Belgian,1927-) - Ephémérides brouillées, 1980.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>A</th>
                            <td>Avery, Milton Clarck</td>
                            <td>American, 1885-1965</td>
                            <td>Dancing Trees</td>
                            <td>1960</td>
                            <td><a class="btn btn-outline-success" href="../assets/Avery, Milton Clarck (American, 1885-1965) - Dancing Trees, 1960.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>B</th>
                            <td>Beckmann, Max</td>
                            <td>German, 1884-1950</td>
                            <td>The Bath</td>
                            <td>1930</td>
                            <td><a class="btn btn-outline-success" href="../assets/Beckmann, Max (German, 1884-1950) - The Bath, 1930.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td>Mitchell, Joan</td>
                            <td>American, 1925-1992</td>
                            <td>Untitled</td>
                            <td>1991</td>
                            <td><a class="btn btn-outline-success" href="../assets/Mitchell, Joan (American, 1925-1992) - Untitled, 1991.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>M</th>
                            <td>Münter, Gabriele</td>
                            <td>German, 1877-1962</td>
                            <td>Kirche an der Ramsach</td>
                            <td>1935</td>
                            <td><a class="btn btn-outline-success" href="../assets/Münter, Gabriele (German, 1877-1962) - Kirche an der Ramsach, 1935.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>P</th>
                            <td>Pollock, Jackson</td>
                            <td>American, 1912-1956</td>
                            <td>No. 8</td>
                            <td>1949</td>
                            <td><a class="btn btn-outline-success" href="../assets/Pollock, Jackson (American, 1912-1956) - No. 8, 1949.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>R</th>
                            <td>Raphaël, Raffaello Sanzio da Urbino</td>
                            <td>Italian, 1483-1520</td>
                            <td>Desposizione</td>
                            <td>1507</td>
                            <td><a class="btn btn-outline-success" href="../assets/Raphaël, Raffaello Sanzio da Urbino (Italian, 1483-1520)  - Desposizione, 1507.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>R</th>
                            <td>Rothko, Mark</td>
                            <td>American, 1903-1970</td>
                            <td>Black on Grey</td>
                            <td>1969</td>
                            <td><a class="btn btn-outline-success" href="../assets/Rothko, Mark (American, 1903-1970) - Black on Grey, 1969.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>S</th>
                            <td>Sorolla y Bastida, Joaquín</td>
                            <td>Spanish, 1863-1923</td>
                            <td>Retour de pêche, le halage de la barque</td>
                            <td>1894</td>
                            <td><a class="btn btn-outline-success" href="../assets/Sorolla y Bastida, Joaquín (Spanish, 1863-1923) - Retour de pêche, le halage de la barque, 1894.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>S</th>
                            <td>Stichbury, Peter</td>
                            <td>New Zealand, 1969-</td>
                            <td>Zach Klein</td>
                            <td>2008</td>
                            <td><a class="btn btn-outline-success" href="../assets/Stichbury, Peter (New Zealand, 1969-) - Zach Klein, 2008.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>T</th>
                            <td>Twombly, Cy</td>
                            <td>American, 1928-2011</td>
                            <td>Lepanto VII</td>
                            <td>2001</td>
                            <td><a class="btn btn-outline-success" href="../assets/Twombly, Cy (American, 1928-2011) - Lepanto VII, 2001.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        <tr>
                            <th>U</th>
                            <td>Ufan, Lee</td>
                            <td>South Korean, 1936-</td>
                            <td>With Winds</td>
                            <td>1984</td>
                            <td><a class="btn btn-outline-success" href="../assets/Ufan, Lee (South Korean, 1936-) - With Winds, 1984.jpg">
                                    <span class="fa fa-file-image"></span>
                                </a>
                            </td>
                            <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                <a class="btn btn-danger" href="#">Supprimer</a> </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- contextual footer -->
            <footer class="artboard__footer mb-5">
                <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                    <ul class="navbar-nav mr-auto ml-2 mt-md-0">
                        <li class="nav-item active">
                            <a href="#top" class="btn btn-dark">
                                <span class="fa fa-arrow-circle-up mr-2"></span>Haut de page
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#!" class="btn btn-primary">
                                <span class="fa fa-print mr-2"></span>Imprimer
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="art-work.html" class="btn btn-primary">
                                <span class="fa fa-plus-circle mr-2"></span>Ajouter
                            </a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Recherche artiste/&oelig;uvre">
                    </form>
                </nav>
            </footer>
        </div>
    </div>
</main>

<!-- Footer -->
<?php require_once __DIR__ . "/layout/footer.php"; ?>