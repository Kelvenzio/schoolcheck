<?php
if ( !empty($_POST)) {

    $id = $_POST['id'];

    // keep track validation errors
    $school = null;
    $adress = null;
    $zipcode = null;
    $district = null;
    $mobileNumber = null;
    $email = null;
    $website = null;
    $opendays = null;
    $openclass = null;
    $infonight = null;
    $private = null;
    $level = null;
    $concept = null;
    $specials = null;
    $tto = null;
    $sports = null;
    $tech = null;
    $spanish = null;
    $vso = null;
    $vmboB = null;
    $vmboK = null;
    $vmboT = null;
    $havo = null;
    $vwo = null;
    $gymnasium = null;
    $basis = null;
    $art = null;

    // keep track post values
    $school = $_POST['schoolname'];
    $adress = $_POST['adress'];
    $zipcode = $_POST['zipcode'];
    $district = $_POST['district'];
    $mobileNumber = $_POST['number'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $opendays = $_POST['opendays'];
    $openclass = $_POST['openclass'];
    $infonight = $_POST['infonight'];
    $private = $_POST['private'];
    $level = $_POST['level'];
    $concept = $_POST['concept'];
    $specials = $_POST['specials'];
    $tto = $_POST['tto'];
    $sports = $_POST['sports'];
    $tech = $_POST['tech'];
    $spanish = $_POST['spanish'];
    $vso = $_POST['vso'];
    $vmboB = $_POST['vmbob'];
    $vmboK = $_POST['vmbok'];
    $vmboT = $_POST['vmbot'];
    $havo = $_POST['havo'];
    $vwo = $_POST['vwo'];
    $gymnasium = $_POST['gymnasium'];
    $basis = $_POST['basis'];
    $art = $_POST['art'];


include '../includes/database.php';
        // insert data
        $sql = " UPDATE schoolcheck SET
                                schoolname='$school',
                                adress='$adress',
                                zipcode='$zipcode',
                                district='$district',
                                telnr='$mobileNumber',
                                email='$email',
                                website='$website',
                                openday='$opendays',
                                openclass='$openclass',
                                infonight='$infonight',
                                private='$private',
                                levels='$level',
                                concept='$concept',
                                specials='$concept',
                                tto='$tto',
                                sports='$sports',
                                tech='$tech',
                                spanish='$spanish',
                                vso='$vso',
                                vmbob='$vmboB',
                                vmbok='$vmboK',
                                vmbot='$vmboT',
                                havo='$havo',
                                vwo='$vwo',
                                gymnasium='$gymnasium',
                                basis='$basis',
                                art='$art' WHERE id= '$id' ";
        if ($mysqli->query($sql) === TRUE) {
            echo "<br>update succesvol</br>";

            //header("Location: ../index.php");
        } else {
            echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
        }

        $mysqli->close();



}
    echo '<a href="../index.php">Back</a>';
?>
