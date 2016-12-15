
<div class="container">

    <div class="span10 offset1">
        <div class="row">
            <h3>Delete <?php
            $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
            $id = $_REQUEST['id'];
            $query ="SELECT * FROM schoolcheck WHERE id = $id";
                foreach ($mysqli->query($sql) as $row){ echo $row['schoolname'];}
                ?></h3>
        </div>

        <form class="form-horizontal" action="model/delete.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>"/>
            <p class="alert alert-error">Are you sure want to delete ?</p>
            <div class="form-actions">
                <button type="submit" class="btn btn-danger">Yes</button>
                <a class="btn" href="index.php">No</a>
            </div>
        </form>
    </div>

</div> <!-- /container -->
