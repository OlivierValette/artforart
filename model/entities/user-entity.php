<?php


/** Retrieve user from email and password
 * @param string $email
 * @param string $password
 * @return array user data or [] if no connection
 */
function getUserByEmailPassword(string $email, string $password) : array
{

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

