<?php

// Parameters retrieval
require_once __DIR__ . "/../config/parameters.php";

// Database connexion
try {
    $connexion = new PDO(
        'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST,
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8', lc_time_names = 'fr_FR'"
        ]
    );
} catch (PDOException $exception) {
    echo 'Erreur de connexion à la base de données';
}


// Functions with SQL queries

// Standard functions
// TODO Organize standard functions in separate files in a lib directory

/** Count number of rows in table
 * @param string $table Table name
 * @return int
 */
function getCountEntities(string $table) : int {
    global $connexion;

    $query = "SELECT COUNT(*) AS nb_rows FROM $table ";

    $stmt = $connexion->prepare($query);            // Prépare la requête
    $stmt->execute();                               // Exécute la requête
    return intval($stmt->fetch()["nb_rows"]);       // fetch retourne la première ligne uniquement (tableau simple)
}


/** Get all or one record(s) of a table
 * @param string $table Table name
 * @param int|null $id optional id
 * @return array
 */
function getAllEntities(string $table, int $id = null) : array {
    global $connexion;

    $query = "SELECT * FROM $table";

    if (isset($id)) {
        $query .= " WHERE id = :id";
    }
    $stmt = $connexion->prepare($query);
    if (isset($id)) {
        $stmt->bindParam(":id", $id);
    }
    $stmt->execute();

    return isset($id) ? $stmt->fetch() : $stmt->fetchAll();
}


/** Delete a record with id $id in table $table
 * @param string $table Table name
 * @param int $id Id to be deleted
 * @return int or null
 */
function deleteEntity(string $table, int $id) : ?int {
    global $connexion;
    $errcode = null;

    $query = "DELETE FROM $table WHERE $table.id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);

    try {
        $stmt->execute();
    } catch (PDOException $ex) {
        $errcode = $ex->getCode();
    }

    return $errcode;

}

// Specific functions

/** Retrieve user from email and password
 * @param string $email
 * @param string $password
 * @return array user data or [] if no connection
 */
function getUserByEmailPassword(string $email, string $password) : array {

    global $connexion;

    // Passwords are hashed with sha1 in database
    $query = "
      SELECT *
      FROM user
      WHERE user.email = :email
      AND user.password = SHA1(:password)
    ";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $password);
    $stmt->execute();
    $result = $stmt->fetch();

    // if no record, $result is bool false
    // function must return an array
    return ($result) ? $result : [];

}