<?php
session_start();
include '../includes/config.php';
include '../includes/functions.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$city = $_POST['city'];
$address = $_POST['address'];

$picture = $_FILES['picture']['name'];
$target = "../images/" . basename($picture);
move_uploaded_file($_FILES['picture']['tmp_name'], $target);

if (registerUser($name, $email, $password, $city, $address, $picture)) {
    header('Location: ../views/login_screen.php');
} else {
    echo "Error: " . $conn->error;
}
?>
