<?php
$conn = new mysqli("localhost", "root", "", "bsit2e_");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
