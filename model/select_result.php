<?php

$result = $mysqli->query("SELECT * FROM result");
$result = convertResultToArray($result);
