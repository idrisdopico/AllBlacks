<?php

$sql = "SELECT * FROM matches";

$result = $mysqli->query($sql);
$result = resultToArray($result);