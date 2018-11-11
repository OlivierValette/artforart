<?php

require_once __DIR__ . "/model/database.php";

session_start();

if (isset($_POST["mail"]) && isset($_POST["pwd"])) {
    // coming from login page
    $email = $_POST["mail"];
    $password = $_POST["pwd"];

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
}

// Non admin users redirection to main site
if (!$user["is_admin"]) {
    // TODO Create a main site index page (at least !)
    header("Location: ../");
}