<?php
if ( !empty($_GET['id'])) {
    $id = $_REQUEST['id'];
}

if ( !empty($_POST)) {
    // keep track post values
    $id = $_POST['id'];
    include '../includes/database.php'; 
    // delete data
    $sql = "DELETE FROM schoolcheck WHERE id = $id";
    if($mysqli -> query($sql) === TRUE) {
        echo "<br>update succesvol</br>";
        echo $sql;
    }else{
        echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli -> close();


}

?>
