<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php

$q = $_GET['q'];
echo "TEST";
$con = mysqli_connect('localhost','root','root','world');
if (!$con) {
   die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM Verhalen WHERE title LIKE '$q%'";
$sql="SELECT * FROM Verhalen";
$result = mysqli_query($sql);
echo "TEST";
echo "<table>
<tr>
<th>Writer</th>
<th>Title</th>
<th>Date Created</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['Writer'] . "</td>";
    echo "<td>" . $row['title'] . "</td>";
    echo "<td>" . $row['date_created'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>