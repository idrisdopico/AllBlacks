<?php
if(!isset($page_nr)){
	$page_nr = 1;
}

$nr_items_page = NR_ITEMS_PAGE;
$offset = ($page_nr-1)*$nr_items_page;


$sql = "SELECT * FROM newsarticles LIMIT " . $offset . "," . "$nr_items_page";
// $result = $mysqli->query("SELECT * FROM newsarticles");
$result = $mysqli->query($sql);
$result = resultToArray($result);
