<?php
// parameters retrieval
require_once __DIR__ . "/config/parameters.php";

// security check (sign-in)
require_once __DIR__ . "/security.php";

// HEAD
require_once __DIR__ . "/layout/head.php";

// HEADER : top navbar
require_once __DIR__ . "/layout/header.php";

require_once __DIR__ . "/model/database.php";
$artworks = getAllEntities("artwork");
?>

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
                <?php // TODO Gérer les stats ?>
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
                        <?php foreach($artworks as $artwork) : ?>
                            <tr>
                                <?php $artist = getAllEntities("artist", $artwork["artist_id"]); ?>
                                <td><?= $artist["lastname"]; ?>, <?= $artist["firstname"]; ?></td>
                                <td>Franco-Belgian,<?= $artist["birthyear"]; ?>-<?= $artist["deathyear"]; ?></td>
                                <td><?= $artwork["title"]; ?></td>
                                <td><?= $artwork["year_created"]; ?></td>
                                <td><a class="btn btn-outline-success" href="<?= ASSETS_URL . $artwork["photo"] ?>">
                                        <span class="fa fa-file-image"></span>
                                    </a>
                                </td>
                                <td><a class="btn btn-warning" href="art-work.html">Modifier</a> &nbsp;
                                    <a class="btn btn-danger" href="#">Supprimer</a> </td>
                            </tr>
                        <?php endforeach; ?>
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