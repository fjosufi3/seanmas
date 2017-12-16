<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE ali IS NOT NULL");

    echo 'Ali likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['ali'] . ' ';
    }

?>
