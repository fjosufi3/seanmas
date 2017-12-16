<?php
    require('connection.php');

    if (mysqli_connect_errno()) {
        echo mysqli_connect_errno();
        exit();
    } else {
      $likes = $_POST['i'];
      $name = $_POST['n'];

      echo $name;
      echo $likes;

      $query = mysql_query("INSERT INTO users ($name) values ('$likes')");

      echo "Success";
    }
?>
