<?php 
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}
$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_input%' or content LIKE '%$search_input%'";
$result = $mysqli->query($con,$sql);
$result = resultToArray($result);
