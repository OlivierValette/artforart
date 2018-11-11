<?php

// HEAD
require_once __DIR__ . "/layout/head.php";
// HEADER : top navbar
require_once __DIR__ . "/layout/header.php";

$nationalties = getAllEntities("nationalty");
$loctypes = getAllEntities("location_type");

?>

<main class="container-fluid">
        <div class="row align-items-start">

            <!-- Sidebar (colonne 1) -->
            <div class="col-2">
                <?php require_once __DIR__ . "/layout/sidebar.php"; ?>
            </div>

            <!-- Contenu (colonne 2) -->
            <div class="col-10">

                <!-- Détail d'une oeuvre -->
                <div class="artwork">

                    <!-- Informations sur l'artiste -->
                    <h2 class="subtitle">Artiste</h2>
                    <form>
                        <div class="artist-fclass col-sm-7">
                            <div class="form-group row">
                                <label for="artist__name" class="col-sm-2 col-form-label">Nom</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input"
                                           id="artist__name"
                                           name="lastname" placeholder="Nom" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artist__firstname" class="col-sm-2 col-form-label">Prénom(s)</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control input"
                                           id="artist__firstname"
                                           name="firstname"
                                           placeholder="Prénom" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artist__birthyear" class="col-sm-2 col-form-label">Année de naissance</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control input"
                                           id="artist__birthyear"
                                           name="birth_year"
                                           placeholder="" min="500" max="2050">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artist__deathyear" class="col-sm-2 col-form-label">Année de décès</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control input"
                                           id="artist__deathyear"
                                           name="death_year"
                                           placeholder="" min="500" max="2050">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="artist__country" class="col-sm-2 col-form-label">Nationalité</label>
                                <div class="col-sm-10">
                                    <select class="form-control input"
                                            id="artist__country"
                                            name="nationalty">
                                        <?php foreach($nationalties as $nationalty) : ?>
                                            <option value="<?= $nationalty["label"]; ?>">
                                                <?= $nationalty["label"]; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Informations sur l'oeuvre -->
                        <div class="row">
                            
                            <!-- Formulaires en partie gauche (colonne 1) -->
                            <div class="col-7">
                                <h2 class="subtitle"> &OElig;uvre</h2>
                                <div class="form-group row">
                                        <label for="artwork__title" class="col-sm-2 col-form-label">Titre</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control input"
                                                   id="artwork__title"
                                                   name="title"
                                                   placeholder="" required>
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="artwork__date" class="col-sm-2 col-form-label">Année</label>
                                        <div class="col-sm-10">
                                            <input type="number" class="form-control input"
                                                   id="artwork__date"
                                                   name="date_creation"
                                                   placeholder="2001" min="500" max="2050">
                                        </div>

                                        <label for="artwork__date-ca" class="form-check-label"></label>
                                        <div class="col-sm-10 offset-sm-2">
                                            <input type="checkbox" class="form-check-input input"
                                                   id="artwork__date-ca"
                                                   name="circa" value="circa">ca.
                                        </div>
                                </div>
                                <div class="form-group row">
                                        <label for="artwork__medium" class="col-sm-2 col-form-label">Médium</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control input"
                                                   id="artwork__medium"
                                                   name="medium"
                                                   placeholder="Acrylic , wax crayon and graphite on canvas">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="artwork__dims" class="col-sm-2 col-form-label">Dimensions (L&nbsp;x&nbsp;l&nbsp;x&nbsp;H)</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input"
                                               id="artwork__dims"
                                               name="dimension"
                                               placeholder="216.5 × 340.4 cm">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="artwork__copyr" class="col-sm-2 col-form-label">Droits</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input"
                                               id="artwork__copyr"
                                               name="awcopyr"
                                               placeholder="© Cy Twombly Foundation">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="artwork__mvt" class="col-sm-2 col-form-label">Mouvement</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input"
                                               id="artwork__mvt"
                                               name="awtitle"
                                               placeholder="Expressionnisme abstrait" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="artwork__loc" class="col-sm-2 col-form-label">Localisation</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control input"
                                               id="artwork__loc"
                                               name="awmvt"
                                               placeholder="Museum Brandhorst" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-10 offset-sm-2">
                                        <?php foreach($loctypes as $loctype) : ?>
                                        <div class="form-check-inline">
                                            <label for="artwork__loc1" class="form-check-label">
                                                <input type="radio" class="form-check-input"
                                                       id="artwork__loc1"
                                                       name="<?= $loctype["label"]; ?>" value="<?= $loctype["label"]; ?>">
                                            </label>
                                        </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <label for="artwork__desc">Descriptif</label>
                                        <textarea class="form-control input" rows="5"
                                                  id="artwork__desc"
                                                  name="awdesc">
                                            Among the American artists who first came to prominence in the late 1950s,
                                            as the great juggernaut of Abstract Expressionism was waning,
                                            Cy Twombly (Lexington, Virginia 1928) remained closest to the earlier
                                            generation´s belief in the primacy of the gesture, developing an inimitable
                                            handwriting that became the essence of his painting along with the use of
                                            the word evoking mythological figures and events as an inherent compositional
                                            element and the gradual incorporation of color.
                                        </textarea>
                                    </div>
                                </div>
                                <br>
                            </div>
                        
                            <!-- Image(s) en partie droite (colonne 2) -->
                            <div class="col-5 mt-5">
                                <img class="img-fluid rounded" 
                                        src="../assets/Twombly, Cy (American, 1928-2011) - Lepanto VII, 2001.jpg"
                                        alt="Twombly, Cy (American, 1928-2011) - Lepanto VII, 2001">

                                        
                                <div class="artwork__img mt-5 mb-1">
                                    <div class="lead">
                                        <label for="image_uploads">
                                            <span class="fa fa-file-import mr-2"></span>Fichier image de l'&oelig;uvre à sélectionner :
                                        </label>
                                        <br>
                                        <input type="file" id="image_uploads" class="img-load" accept=".jpg, .jpeg, .png" name="image_uploads">
                                    </div>
                                    <div class="img-preview">
                                        <p>Aucun fichier sélectionné actuellement</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Boutons de validation -->
                        <div class="artwork__action text-center mb-5">
                            <button type="submit" class="btn btn-warning">Valider</button> &nbsp;
                            <button type="reset" class="btn btn-danger">Annuler</button>
                        </div>
                            
                    </form>
                    
                </div>
                
            </div>
        </div>
    </main>
    

<script src="js/main.js"></script>

<!-- Footer -->
<?php require_once __DIR__ . "/layout/footer.php"; ?>