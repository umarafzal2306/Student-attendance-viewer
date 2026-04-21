<?php

$xml = simplexml_load_file("students.xml");

$courses = ["AI", "Java", "Web", "Maths"];

echo "<h1 style='text-align:center;'>Student Attendance</h1>";

echo "<table border='1' cellpadding='10' style='margin:auto; border-collapse:collapse;'>";
echo "<tr>
        <th>Name</th>
        <th>Roll</th>
        <th>AI</th>
        <th>Java</th>
        <th>Web</th>
        <th>Maths</th>
      </tr>";

foreach ($xml->student as $student) {

    echo "<tr>";
    echo "<td>" . $student->name . "</td>";
    echo "<td>" . $student->roll . "</td>";

    foreach ($courses as $course) {
        $attendance = rand(60, 100);
        echo "<td>$attendance%</td>";
    }

    echo "</tr>";
}

echo "</table>";

?>
