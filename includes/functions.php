<?php
function convertResultToArray($DB_Result){
    $ResultArray = array();
    while ($row = $DB_Result->fetch_assoc()) {
        array_push($ResultArray, $row);
    }
    return $ResultArray;
}
