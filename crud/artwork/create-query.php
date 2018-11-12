<?php

// include security because no header include here
require_once  __DIR__ . "/../../security.php";

require_once __DIR__ . "/../../../model/database.php";

// Test what's retrieved with POST
//   var_dump($_POST); die;

// user table uptdate
$lastname = $_POST["lastname"];
$firstname = $_POST["firstname"];
$email = $_POST["email"];
$password = $_POST["password"];

$user_id = insertEntity("user", [
    "lastname" => $lastname,
    "firstname" => $firstname,
    "email" => $email,
    "password" => sha1($password),
    "admin" => 0
]);

// doctor table uptdate
$university = $_POST["university"];
$phone = $_POST["phone"];

$photo = $_FILES["photo"]["name"];
$photo_tmp = $_FILES["photo"]["tmp_name"];

$result = insertEntity("doctor", [
    "id" => $user_id,
    "photo" => $photo,
    "university" => $university,
    "phone" => $phone
]);
// photo upload
move_uploaded_file($photo_tmp, __DIR__ . "/../../../" . UPLOAD_DIR . $photo);

// doctor_has_specialty update
$specialties = $_POST["specialty"];

foreach ($specialties as $specialty)
$result = insertEntity("doctor_has_specialty", [
    "doctor_id" => $user_id,
    "specialty_id" => $specialty
]);

// redirection
header("Location: index.php");