<?php

require_once __DIR__ . "/../../../model/database.php";
$doctors = getDoctors();

require_once __DIR__ . "/../../layout/header.php";

?>

<h1 class="h2">Gestion des docteurs</h1>

<div class="container">

    <p>
        <a href="create-form.php" class="btn btn-primary">
            <i class="fa fa-plus"></i>
            Ajouter
        </a>
    </p>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Photo</th>
                <th class="actions">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($doctors as $doctor) : ?>
            <tr>
                <td><?= $doctor["lastname"]; ?></td>
                <td><?= $doctor["firstname"]; ?></td>
                <td>
                    <img src="<?= SITE_URL . UPLOAD_DIR . $doctor["photo"]; ?>"
                         alt="<?= $doctor["fullname"]; ?>"
                         class="img-thumbnail">
                </td>
                <td class="actions">
                    <!--Passage en get de l'id-->
                    <a href="update-form.php?id=<?= $doctor["id"]; ?>" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                        Modifier
                    </a>
                    <form action="delete-query.php" method="post">
                        <!--Passage en post de l'id-->
                        <input type="hidden" name="id" value="<?= $doctor["id"]; ?>">
                        <button class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            Supprimer
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>
