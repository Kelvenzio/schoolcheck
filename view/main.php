
<div class="container">
    <h2>Schoolcheck</h2>

    <div class="row">
        <p>
            <a href="?action=create" class="btn btn-succes">Create</a>
        </p>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>School</th>
                <th>Address</th>
                <th>Zipcode</th>
                <th>District</th>
                <th>Mobile number</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <?php
                $mysqli = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
                $query="SELECT * FROM schoolcheck";

                foreach ($mysqli->query($query) as $row){
                    echo '<tr>';
                    echo '<td>'. $row['schoolname'] . '</td>';
                    echo '<td>'. $row['adress'] . '</td>';
                    echo '<td>'. $row['zipcode'] . '</td>';
                    echo '<td>'. $row['district'] . '</td>';
                    echo '<td>'. $row['telnr'] . '</td>';
                    echo '<td>'. $row['email'] . '</td>';
                    echo '<td>'. $row['website'] . '</td>';

                    echo '<td width=250>';
                    echo '<a class="btn" href="?action=read&id='.$row['id'].'">Read</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-success" href="?action=update&id='.$row['id'].'">Update</a>';
                    echo '&nbsp;';
                    echo '<a class="btn btn-danger" href="?action=delete&id='.$row['id'].'">Delete</a>';
                    echo '</td>';
                    echo '</tr>';
                }

                ?>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
