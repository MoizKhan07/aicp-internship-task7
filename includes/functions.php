<?php
function registerUser($name, $email, $password, $city, $address, $picture) {
    global $conn;
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (picture, name, email, password, city, address) VALUES ('$picture', '$name', '$email', '$hashedPassword', '$city', '$address')";
    return $conn->query($sql);
}
?>
