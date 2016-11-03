<?php
$q = $_GET['q'];

$con = mysqli_connect('127.0.0.1','20670_myband','Myband','20670_myband');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"20670_myband");
$sql="SELECT * FROM Verhalen WHERE title LIKE '$q%'";
$result = mysqli_query($con,$sql);
?>