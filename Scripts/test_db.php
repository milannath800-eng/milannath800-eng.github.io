<?php
// Turn on error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo "<h1>Starting Connection Test...</h1>";

// YOUR CREDENTIALS
$servername = "sql102.infinityfree.com";
$username = "if0_40925321";
$password = "PN05BR111GFXx5b";
$dbname = "if0_40925321_milan_portfolio";

// Try to connect
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if it worked
if ($conn->connect_error) {
    die("<h2 style='color:red'>CONNECTION FAILED: " . $conn->connect_error . "</h2>");
} 

echo "<h2 style='color:green'>SUCCESS! Connected to Database.</h2>";
echo "<p>Host: $servername <br> User: $username <br> DB: $dbname</p>";

$conn->close();
?>