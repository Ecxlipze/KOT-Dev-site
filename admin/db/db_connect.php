<?php
$server = "localhost";
$user = "usr_kot";
$password = '$Ms8Ev6onzBx%z8k'; // use single quotes
$dbname = "admin_kot";

$con = mysqli_connect($server, $user, $password, $dbname);

if ($con) {
    // Connection successful
    // echo "Connected successfully"; // optional
} else {
    die("Connection failed: " . mysqli_connect_error());
}
?>
