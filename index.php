<?php
    $con = new mysqli("127.0.0.1", "root", "password", "mydb"); //new database connection, params are (host, name, password, db name)
    $message = $con->query("SELECT message FROM myTable")->fetch_object()->message; // SQL query to get data
    $con->close(); // close db connection
    echo "<p>$message</p>";
    echo "Hello From Sites Folder!";
?>

<!-- PHP Logic block with HTML -->
<?php
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
?>
    <h3>strpos() must have returned non-false</h3>
    <p>You are using Internet Explorer</p>
<?php
    } else {
?>
    <h3>strpos() must have returned false</h3>
    <p>You are not using Internet Explorer</p>
<?php
    }
?>
<!-- END PHP Logic block -->

<?php
    echo "<h3>Output of SERVER: </h3>";
    var_dump($_SERVER);
?> 

<?php
    phpinfo(); // phpinfo() is commonly used to check configuration settings and for available predefined variables on a given system.
?>


