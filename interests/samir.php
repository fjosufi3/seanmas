<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE samir IS NOT NULL");

    echo 'Samir likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['samir'] . ' ';
    }

?>
