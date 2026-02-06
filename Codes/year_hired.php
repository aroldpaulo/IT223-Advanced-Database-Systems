<?php
include 'db.php';

$sql = "SELECT name, YEAR(hire_date) AS hire_year FROM employees";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . " - " . $row['hire_year'] . "<br>";
}
?>
