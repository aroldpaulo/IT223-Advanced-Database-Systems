<?php
include 'db.php';

$sql = "SELECT AVG(salary) AS average_salary FROM employees";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "Average Salary: " . round($row['average_salary'], 2);
?>
