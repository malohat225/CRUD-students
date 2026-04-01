<?php
require "config.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

echo "<h2>STUDENTS</H2>";
echo "<a href='create.php'>Add new student</a><br>";

echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>id</th>
        <th>full_name</th>
        <th>phone_number</th>
        <th>address</th>
        <th>Actions</th>
      </tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['full_name']."</td>";
    echo "<td>".$row['phone_number']."</td>";
    echo "<td>".$row['address']."</td>";
    echo "<td>
            <a href='update.php?id=".$row['id']."'>Edit</a> | 
            <a href='delete.php?id=".$row['id']."'>Delete</a>
          </td>";
    echo "</tr>";
}