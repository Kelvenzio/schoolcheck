<?php

$result = $mysqli->query("SELECT * FROM images");
$result = convertResultToArray($result);
