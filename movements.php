<?php

// HEAD
require_once __DIR__ . "/layout/head.php";
// HEADER : top navbar
require_once __DIR__ . "/layout/header.php";

$movements = getAllEntities("movement");

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
			<header class="mvt__header mt-3 mb-3">
				<div class="alert alert-primary lead" role="alert">
						<strong>229</strong> mouvements artistiques</p>
				</div>
				<nav class="navbar navbar-expand-lg navbar-dark bg-light">
					<div class="nav-item">
						<form class="form-inline my-2 my-lg-0" id="searchForm" action="#">
							<input class="form-control mr-sm-2" type="search" placeholder="Recherche...">
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
								<a href="404.html" class="btn btn-dark">
									<span class="fa fa-plus-circle mr-2"></span>Ajouter
								</a>
							</div>
						</li>
					</ul>
				</nav>
			</header>

			<!-- Liste des mouvements artistiques  -->
			<section class="mvt__list col-4 offset-4">
				<table class="table table-sm table-striped table-hover">
					<thead class="thead-dark">
						<tr>
							<th>Mouvements artistiques</th>
						</tr>
					</thead>
					<tbody>
                        <?php foreach($movements as $movement) : ?>
						<tr>
                            <td>
                                <a href="<?= $movement['wikipedia_url']; ?>"
                                   class="mw-redirect"
                                   title="<?= $movement['label']; ?>" >
                                    <?= $movement['label']; ?>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</section>

			<!-- contextual footer -->
			<footer class="mvt__footer mb-5">
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
							<a href="404.html" class="btn btn-primary">
								<span class="fa fa-plus-circle mr-2"></span>Ajouter
							</a>
						</li>
					</ul>
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="text" placeholder="Recherche...">
					</form>
				</nav>
			</footer>
		</div>
	</main>

<!-- Footer -->
<?php require_once __DIR__ . "/layout/footer.php"; ?>