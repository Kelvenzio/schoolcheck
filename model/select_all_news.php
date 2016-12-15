<?php
$sql = "SELECT * FROM newsarticle";
$result = $mysqli->query($sql);

$result = convertResultToArray($result);
