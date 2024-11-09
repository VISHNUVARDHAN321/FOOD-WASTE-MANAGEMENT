<?php
$username = $_POST['username'];
$id = $_POST['id'];
$email = $_POST['email'];
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];

// Create a connection
$conn = mysqli_connect('localhost', 'root', '', 'ram');

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape special characters in input data
$username = mysqli_real_escape_string($conn, $username);
$id = mysqli_real_escape_string($conn, $id);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);
$cpassword = mysqli_real_escape_string($conn, $cpassword);

// Check if passwords match
// if ($password !== $cpassword) {
//     echo "<script>alert('Passwords do not match');</script>";
//     echo "<script>window.open('signup.html', '_self');</script>";
//     exit();
// }

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert data into the database
$sql = "INSERT INTO usertable (username, id, email, password, phone) VALUES ('$username', '$id', '$email', '$hashed_password', '$cpassword')";

$r = mysqli_query($conn, $sql);

if ($r) {
    echo "<script>alert('Successfully created your account');</script>";
    echo "<script>window.open('login.php', '_self');</script>";
} else {
    echo "<script>alert('Please try again later');</script>";
    echo "<script>window.open('signup.html', '_self');</script>";
}

// Close the connection
mysqli_close($conn);
