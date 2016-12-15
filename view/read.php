
<body>
<div class="container">
    <h2>Schoolcheck</h2>
    <div class="row">


        <table class="table table-striped table-bordered" style="margin-bottom: 0;">
            <thead>
            <tr>
              <th>Schoolname</th>
                <th>Address</th>
                <th>Zip code</th>
                <th>District</th>
                <th>Mobile number</th>
                <th>E-mail</th>
                <th>Website</th>
                <th>Open day</th>
                <th>Open class</th>
                <th>Info night</th>
                <th>Private</th>
                <th>Levels</th>
                <th>Concept</th>
                <th>Specials</th>
                <th>TTO</th>
                <th>Sports</th>
                <th>Tech</th>
                <th>Spanish</th>
                <th>VSO</th>
                <th>VMBO-B</th>
                <th>VMBO-K</th>
                <th>VMBO-T</th>
                <th>HAVO</th>
                <th>VWO</th>
                <th>Gymnasium</th>
                <th>Basic</th>
                <th>Art</th>

            </tr>
            </thead>
            <tbody>
            <tr>
            </tr>                <?php

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
                echo '<td>'. $row['opendays'] . '</td>';
                echo '<td>'. $row['openclass'] . '</td>';
                echo '<td>'. $row['infonight'] . '</td>';
                echo '<td>'. $row['private'] . '</td>';
                echo '<td>'. $row['level'] . '</td>';
                echo '<td>'. $row['concept'] . '</td>';
                echo '<td>'. $row['specials'] . '</td>';
                echo '<td>'. $row['tto'] . '</td>';
                echo '<td>'. $row['sports'] . '</td>';
                echo '<td>'. $row['tech'] . '</td>';
                echo '<td>'. $row['spanish'] . '</td>';
                echo '<td>'. $row['vso'] . '</td>';
                echo '<td>'. $row['vmboB'] . '</td>';
                echo '<td>'. $row['vmboK'] . '</td>';
                echo '<td>'. $row['vmboT'] . '</td>';
                echo '<td>'. $row['havo'] . '</td>';
                echo '<td>'. $row['vwo'] . '</td>';
                echo '<td>'. $row['gymnasium'] . '</td>';
                echo '<td>'. $row['basis'] . '</td>';
                echo '<td>'. $row['art'] . '</td>';
            }

            ?>

            </tbody>
        </table>
    </div>
    <a href="?action=home">Back</a>
</div>
</body>
</html>
