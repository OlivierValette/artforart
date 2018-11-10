<?php

require_once __DIR__ . "/../config/parameters.php";
require_once __DIR__ . "/../model/database.php";

session_start();

if (isset($_SESSION["id"])) {
    $user = getAllEntities("user", $_SESSION["id"]);
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <!-- Fonts from https://fonts.google.com/ -->
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700" rel="stylesheet">

    <!-- Global css -->
    <link rel="stylesheet" href="css/styles.min.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <!-- title à rendre dynamique -->
    <title>ArtforArt admin board</title>
</head>