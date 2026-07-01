<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "portcontactdb";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn)
{
    die("Connection Failed:". mysqli_connect_error());
}

echo "Database Connected Successfully";

?>