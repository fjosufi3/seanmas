<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE qifan IS NOT NULL");

    echo 'Qifan likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['qifan'] . ' ';
    }

?>
