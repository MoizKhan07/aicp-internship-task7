<?php
session_start();
include '../includes/config.php';

$name = $_POST['name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$category = $_POST['category'];
$description = $_POST['description'];

$photos = $_FILES['photos']['name'];
$target = "../images/" . basename($photos);
move_uploaded_file($_FILES['photos']['tmp_name'], $target);

$sql = "INSERT INTO businesses (name, address, phone_number, category, description, photos) VALUES ('$name', '$address', '$phone_number', '$category', '$description', '$photos')";

if ($conn->query($sql) === TRUE) {
    echo "New business added successfully";
} else {
    echo "Error: " . $conn->error;
}
?>
