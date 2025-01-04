<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['user_name'];
    $password = $_POST['user_pass'];

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Store $username and $hashed_password in the database
    $conn = new mysqli('localhost', 'root', '', 'shoe_ecommerce');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
