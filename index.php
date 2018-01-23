<?php
    $con = new mysqli("127.0.0.1", "root", "password", "mydb"); //new database connection, params are (host, name, password, db name)
    $message = $con->query("SELECT message FROM myTable")->fetch_object()->message; // SQL query to get data
    $con->close(); // close db connection
    echo "<p>$message</p>";
    echo "Hello From Sites Folder!";
    phpinfo(); // phpinfo() is commonly used to check configuration settings and for available predefined variables on a given system.
?>