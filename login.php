<!-- HEAD -->
<?php require_once __DIR__ . "/layout/head.php"; ?>

<body>
    <div class="container bg-light">
        <div class="container text-center">
            <div class="row">
                <div class="col-4 offset-4">
                    <h3 class="Display-4">Console d'administration</h3>
                    <div class="navbar-brand">
                        <a class="navbar-item">
                            <?php require_once __DIR__ . "/src/svg/logo--small.html"; ?>
                        </a>
                    </div>
                    <p class="lead">Connexion requise...</p>
                    <form class="login" action="index.html" method="post">
                        <div class="form-group">
                            <input type="email" name="mail" class="form-control" id="login__unsername" placeholder="Email" autofocus="" required>
                        </div>
                        <div class="form-group">
                            <input type="password" name ="pwd" class="form-control" id="login__password" placeholder="Mot de passe" autofocus="" required>
                        </div>
                        <button class="btn btn-secondary btn-lg" type="submit">
                            Connexion
                            <span class="fa fa-play-circle ml-2"></span>
                        </button>
                    </form>
                    <p class="mt-4">
                        <a href="mailto:admin@artforart.com?subject=Demande%20de%20code">Demande de code d'accès</a>
                        &nbsp;&nbsp; &bullet; &nbsp;
                        <a href="mailto:admin@artforart.com?subject=Oubli%20password">Mot de passe oublié</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

<!-- Footer -->
<?php require_once __DIR__ . "/layout/footer.php"; ?>

