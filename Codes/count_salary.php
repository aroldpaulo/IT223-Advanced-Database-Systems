<?php
include 'db.php';

$sql = "SELECT COUNT(*) AS total FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Total Employees: " . $row['total'];
?>
