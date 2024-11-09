<?php
// Retrieve donor data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$donationType = $_POST['donationType'];
// Add other data as needed

// Find the nearest NGO (this is a simplified example)
$nearestNGOEmail = 'vishnu2003bunny@gmail.com';

// Compose the email message
$to = $nearestNGOEmail;
$subject = 'New Donation from ' . $name;
$message = "Name: $name\nEmail: $email\nDonation Type: $donationType\n";
// Add other information as needed

// Send the email
mail($to, $subject, $message);

// Redirect the donor to a thank-you page
header('Location: thanks.html');
?>
