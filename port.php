<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

echo "<h2>Contact Details</h2>";

echo "Name: " . $name . "<br><br>";
echo "Email: " . $email . "<br><br>";
echo "Subject: " . $subject . "<br><br>";
echo "Message: " . $message . "<br><br>";

?>