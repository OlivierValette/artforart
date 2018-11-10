<?php

require_once __DIR__ . "/model/database.php";

session_start();

if (isset($_SESSION["id"])) {
    // user is already connected
    $user = getAllEntities("user", $_SESSION["id"]);
}

// login page redirection for non connected users
if (!$user) {
    header("Location: login.php");
}

// Non admin users redirection to main site
if (!$user["admin"]) {
    header("Location: ../");
}
