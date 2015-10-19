<?php
$servername = "localhost";
$username = "8e2e16b7c2e0";
$password = "95fafbe087d6d6b9";
$dbname = "teammoby";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("<p>Connection failed: " . $conn->connect_error . "</p>");
}
?>
