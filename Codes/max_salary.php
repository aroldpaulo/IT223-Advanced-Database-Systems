<?php
include 'db.php';

$sql = "SELECT MAX(salary) AS max_salary FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Highest Salary: " . $row['max_salary'];
?>
