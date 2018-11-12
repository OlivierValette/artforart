<?php

require_once  __DIR__ . '/../../../model/database.php';
$specialties = getAllEntities("specialty");

require_once  __DIR__ . '/../../layout/header.php';

?>

<h1 class="h2">Création d'un docteur</h1>

<!--WARNING: add enctype="multipart/form-data" to the form tag to allow file upload-->
<form action="create-query.php" method="post" enctype="multipart/form-data">

    <!-- user fields -->
    <?php require_once __DIR__ . '/../user/form-fields.php'; ?>

    <!-- doctor specific fields -->
    <div class="form-group">
        <label>photo</label>
        <input type="file" class="form-control" name="photo">
    </div>
    <div class="form-group">
        <label>Université</label>
        <input type="text" class="form-control" name="university" placeholder="Université">
    </div>
    <div class="form-group">
        <label>Téléphone</label>
        <input type="text" class="form-control" name="phone" placeholder="Téléphone">
    </div>

    <!-- specialty specific fields -->
    <div class="form-group">
        <label>Spécialités : </label>
        <!-- WARNING: name must be an array -->
        <select name="specialty[]" class="form-control" multiple>
            <?php foreach($specialties as $specialty) : ?>
                <option value="<?= $specialty["id"]; ?>">
                    <?= $specialty["label"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <button type="submit" class="btn btn-success">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>

</form>

<?php require_once __DIR__ . "/../../layout/footer.php"; ?>