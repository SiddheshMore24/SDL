<?php
include "db.php";
$result = $conn->query("SELECT * FROM complain");

echo "<table border='1'>
<tr>
    <th>Name</th>
    <th>Detail</th>
    <th>Status</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['name']}</td>
        <td>{$row['detail']}</td>";
    if($row['name']=='siddhesh')
    {
        echo "
        <td><button>Hey </button></td>
    ";
    }else 
    {
        echo "
        <td><button>Ram</button></td>
        ";

    }

    echo "</tr>";
}

echo "</table>";
?>
