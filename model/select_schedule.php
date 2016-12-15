<?php

$result = $mysqli->query("SELECT * FROM schedule");
$result = convertResultToArray($result);
