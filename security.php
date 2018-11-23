<?php

require_once __DIR__ . "/model/database.php";

session_start();

if (isset($_POST["login-mail"]) && isset($_POST["login-pwd"])) {
    // coming from login page
    $email = $_POST["login-mail"];
    $password = $_POST["login-pwd"];

    // retrieve user in database
    $user = getUserByEmailPassword($email, $password);

    // keep user in session
    if (isset($user["id"])) {
        $_SESSION["id"] = $user["id"];
    }

} elseif (isset($_SESSION["id"])) {
    // user is already connected
    $user = getAllEntities("user", $_SESSION["id"]);
}

// login page redirection for non connected users
if (!$user) {
    header("Location: login.php");
} elseif (!$user["is_admin"]) {
    // Non admin users redirection to main site
    // TODO Create a main site index page (at least !)
    header("Location: ../");
}