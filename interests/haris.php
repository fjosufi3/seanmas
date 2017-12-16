<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE haris IS NOT NULL");

    echo 'Haris likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['haris'] . ' ';
    }

?>
