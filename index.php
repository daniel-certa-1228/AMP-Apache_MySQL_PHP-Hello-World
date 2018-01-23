<?php
    $con = new mysqli("127.0.0.1", "root", "password", "mydb");
    $message = $con->query("SELECT message FROM myTable")->fetch_object()->message;
    $con->close();
    echo "<p>$message</p>";
    echo "Hello From Sites Folder!";
    phpinfo();
?>