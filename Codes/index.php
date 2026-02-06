<?php
include "db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>SQL Functions Demo</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #000; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h2>SQL Functions Demonstration</h2>

<table>
    <tr >
        <th>SQL Function</th>
        <th>Description</th>
        <th>Example Code</th>
        <th>Example Output</th>
    </tr>

    <tr>
        <td>COUNT()</td>
        <td>Counts the number of employees</td>
        <td>SELECT COUNT(*) FROM employees;</td>
        <td><a href="count_salary.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>AVG()</td>
        <td>Calculates the average salary</td>
        <td>SELECT AVG(salary) FROM employees;</td>
        <td><a href="avg_salary.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>UPPER()</td>
        <td>Converts names to uppercase</td>
        <td>SELECT UPPER(name) FROM employees;</td>
        <td><a href="upper_name.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>MAX()</td>
        <td>Finds the highest salary</td>
        <td>SELECT MAX(salary) FROM employees;</td>
        <td><a href="max_salary.php" target="_blank">View Output</a></td>
    </tr>

    <tr>
        <td>YEAR()</td>
        <td>Extracts the hire year</td>
        <td>SELECT name, YEAR(hire_date) FROM employees;</td>
        <td><a href="year_hired.php" target="_blank">View Output</a></td>
    </tr>

</table>

</body>
</html>
