<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE george IS NOT NULL");

    echo 'George likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['george'] . ' ';
    }

?>
