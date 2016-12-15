<?php

$result = $mysqli->query("SELECT * FROM newsarticles");
$result = convertResultToArray($result);
