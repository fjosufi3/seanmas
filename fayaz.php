<?php
    require('../connection.php');

    $query = mysql_query("SELECT * FROM users WHERE fayaz IS NOT NULL");

    echo 'Fayaz likes: ';
    while ($row = mysql_fetch_assoc($query)) {
        echo $row['fayaz'] . ' ';
    }

?>
