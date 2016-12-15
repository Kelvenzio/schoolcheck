<?php

// echo $mysqli;

if ( !empty($_POST)) {
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
    $vmboB = $_POST['vmboB'];
    $vmboK = $_POST['vmboK'];
    $vmboT = $_POST['vmboT'];
    $havo = $_POST['havo'];
    $vwo = $_POST['vwo'];
    $gymnasium = $_POST['gymnasium'];
    $basis = $_POST['basis'];
    $art = $_POST['art'];
    include '../includes/database.php';

    // insert data
    $sql = "INSERT INTO schoolcheck (id,
                                schoolname,
                                adress,
                                zipcode,
                                district,
                                telnr,
                                email,
                                website,
                                opendays,
                                openclass,
                                infonight,
                                private,
                                level,
                                concept,
                                specials,
                                tto,
                                sports,
                                tech,
                                spanish,
                                vso,
                                vmbob,
                                vmbok,
                                vmbot,
                                havo,
                                vwo,
                                gymnasium,
                                basis,
                                art) values(null,
                                '$school',
                                '$adress',
                                '$zipcode',
                                '$district',
                                '$mobileNumber',
                                '$email',
                                '$website',
                                '$opendays',
                                '$openclass',
                                '$infonight',
                                '$private',
                                '$level',
                                '$concept',
                                '$specials',
                                '$tto',
                                '$sports',
                                '$tech',
                                '$spanish',
                                '$vso',
                                '$vmboB',
                                '$vmboK',
                                '$vmboT',
                                '$havo',
                                '$vwo',
                                '$gymnasium',
                                '$basis',
                                '$art')";



    if($mysqli->query($sql) === TRUE) {
        echo "<br>update succesvol</br>";
        echo $sql;
    }
    else{
        echo "<br>Error: " . $sql . "<br>" . $mysqli->error;
    }
    $mysqli -> close();

}
?>

<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Create new school</h3>
        </div>

        <form class="form-horizontal" action="model/create.php" method="post">

            <div class="control-group <?php echo !empty($schoolError)?'error':'';?>">
                <label class="control-label">Schoolname</label>
                <div class="controls">
                    <input name="schoolname" type="text"  placeholder="Name" value="<?php echo !empty($school)?$school:'';?>">
                    <?php if (!empty($schoolError)): ?>
                        <span class="help-inline"><?php echo $schoolError;?></span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($adress)?'error':'';?>">
                <label class="control-label">School adress</label>
                <div class="controls">
                    <input name="adress" type="text"  placeholder="School adress" value="<?php echo !empty($adress)?$adress:'';?>">
                    <?php if (!empty($adressError)): ?>
                        <span class="help-inline"><?php echo $adressError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($zipcodeError)?'error':'';?>">
                <label class="control-label">Zipcode</label>
                <div class="controls">
                    <input name="zipcode" type="text" placeholder="zipcode" value="<?php echo !empty($zipcode)?$zipcode:'';?>">
                    <?php if (!empty($zipcodeError)): ?>
                        <span class="help-inline"><?php echo $zipcodeError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($district)?'error':'';?>">
                <label class="control-label">District</label>
                <div class="controls">
                    <input name="district" type="text"  placeholder="district" value="<?php echo !empty($district)?$district:'';?>">
                    <?php if (!empty($districtError)): ?>
                        <span class="help-inline"><?php echo $districtError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($mobileError)?'error':'';?>">
                <label class="control-label">School Mobile Number</label>
                <div class="controls">
                    <input name="number" type="text"  placeholder="School Mobile Number" value="<?php echo !empty($mobile)?$mobile:'';?>">
                    <?php if (!empty($mobileError)): ?>
                        <span class="help-inline"><?php echo $mobileError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($emailError)?'error':'';?>">
                <label class="control-label">School's Email</label>
                <div class="controls">
                    <input name="email" type="text"  placeholder="email" value="<?php echo !empty($emailError)?$email:'';?>">
                    <?php if (!empty($emailError)): ?>
                        <span class="help-inline"><?php echo $emailError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($websiteError)?'error':'';?>">
                <label class="control-label">School site</label>
                <div class="controls">
                    <input name="website" type="text"  placeholder="Website" value="<?php echo !empty($websiteError)?$website:'';?>">
                    <?php if (!empty($websiteError)): ?>
                        <span class="help-inline"><?php echo $websiteError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($opendaysError)?'error':'';?>">
                <label class="control-label">Open days</label>
                <div class="controls">
                    <input name="opendays" type="text"  placeholder="Open days" value="<?php echo !empty($opendays)?$opendays:'';?>">
                    <?php if (!empty($opendaysError)): ?>
                        <span class="help-inline"><?php echo $opendaysError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($openclassError)?'error':'';?>">
                <label class="control-label">Open Classes</label>
                <div class="controls">
                    <input name="openclass" type="text"  placeholder="Open Classes" value="<?php echo !empty($openclass)?$openclass:'';?>">
                    <?php if (!empty($openclassError)): ?>
                        <span class="help-inline"><?php echo $openclassError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($infonightError)?'error':'';?>">
                <label class="control-label">Info Nights</label>
                <div class="controls">
                    <input name="infonight" type="text"  placeholder="Info Nights" value="<?php echo !empty($infonight)?$infonight:'';?>">
                    <?php if (!empty($infonightError)): ?>
                        <span class="help-inline"><?php echo $infonightError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($private)?'error':'';?>">
                <label class="control-label">Private school?</label>
                <div class="controls">
                    <input name="private" type="radio" value="y">yes
                    <input name="private" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group <?php echo !empty($level)?'error':'';?>">
                <label class="control-label">levels</label>
                <div class="controls">
                    <input name="level" type="text"  placeholder="levels" value="<?php echo !empty($level)?$level:'';?>">
                    <?php if (!empty($levelError)): ?>
                        <span class="help-inline"><?php echo $levelError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($conceptError)?'error':'';?>">
                <label class="control-label">concepts</label>
                <div class="controls">
                    <input name="concept" type="text"  placeholder="Concepts" value="<?php echo !empty($concept)?$concept:'';?>">
                    <?php if (!empty($conceptError)): ?>
                        <span class="help-inline"><?php echo $conceptError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group <?php echo !empty($specialsError)?'error':'';?>">
                <label class="control-label">specials</label>
                <div class="controls">
                    <input name="specials" type="text"  placeholder="Specials" value="<?php echo !empty($specials)?$specials:'';?>">
                    <?php if (!empty($specialsError)): ?>
                        <span class="help-inline"><?php echo $specialsError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">tto</label>
                <div class="controls">
                    <input name="tto" type="radio" value="y">yes
                    <input name="tto" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Sports</label>
                <div class="controls">
                    <input name="sports" type="radio" value="y">yes
                    <input name="sports" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Tech</label>
                <div class="controls">
                    <input name="tech" type="radio" value="y">yes
                    <input name="tech" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">spanish</label>
                <div class="controls">
                    <input name="spanish" type="radio" value="y">yes
                    <input name="spanish" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">vso</label>
                <div class="controls">
                    <input name="vso" type="radio" value="y">yes
                    <input name="vso" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">vmbo-b</label>
                <div class="controls">
                    <input name="vmboB" type="radio" value="y">yes
                    <input name="vmboB" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">vmbo-k</label>
                <div class="controls">
                    <input name="vmboK" type="radio" value="y">yes
                    <input name="vmboK" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">vmbo-t</label>
                <div class="controls">
                    <input name="vmboT" type="radio" value="y">yes
                    <input name="vmboT" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">Havo</label>
                <div class="controls">
                    <input name="havo" type="radio" value="y">yes
                    <input name="havo" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">Vwo</label>
                <div class="controls">
                    <input name="vwo" type="radio" value="y">yes
                    <input name="vwo" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">Gymnasium</label>
                <div class="controls">
                    <input name="gymnasium" type="radio" value="y">yes
                    <input name="gymnasium" type="radio" value="n"> no
                </div>
            </div>

            <div class="control-group <?php echo !empty($basis)?'error':'';?>">
                <label class="control-label">Basis</label>
                <div class="controls">
                    <input name="basis" type="text"  placeholder="basis" value="<?php echo !empty($basis)?$basis:'';?>">
                    <?php if (!empty($basisError)): ?>
                        <span class="help-inline"><?php echo $basisError;?></span>
                    <?php endif;?>
                </div>
            </div>

            <div class="control-group ">
                <label class="control-label">Art</label>
                <div class="controls">
                    <input name="art" type="radio" value="y">yes
                    <input name="art" type="radio" value="n"> no
                </div>
            </div>



            <div class="form-actions">
                <button type="submit" class="btn btn-success">Create</button>
                <a class="btn" href="../index.php">Back</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
