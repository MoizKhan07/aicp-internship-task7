<?php
session_start();
include '../includes/config.php';

$id = $_SESSION['user_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];

$picture = $_FILES['picture']['name'];
$target = "../images/" . basename($picture);
move_uploaded_file($_FILES['picture']['tmp_name'], $target);

$sql = "UPDATE users SET picture='$picture', name='$name', email='$email', city='$city', address='$address' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Profile updated successfully";
} else {
    echo "Error: " . $conn->error;
}
?>
