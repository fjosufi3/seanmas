<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE austin IS NOT NULL");

    echo 'Austin likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['austin'] . ' ';
    }

?>
