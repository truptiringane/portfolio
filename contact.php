<?php
$conn = mysqli_connect("localhost", "root", "", "portcontactdb");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact(name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";

if (mysqli_query($conn, $sql)) {
    echo "Message Sent Successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>