<?php
require_once __DIR__ . "/../../../model/database.php";

$result = deleteEntity("specialty", $_POST["id"]);

header("Location: index.php");