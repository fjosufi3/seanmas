<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE kevin IS NOT NULL");

    echo 'Kevin likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['kevin'] . ' ';
    }

?>
