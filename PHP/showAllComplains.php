<?php
include "db.php";
$result = $conn->query("SELECT * FROM complain");

echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Detail</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['detail']}</td>
    </tr>";
}

echo "</table>";
?>
