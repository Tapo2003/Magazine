<?php
# Database Connection Variable

$serverName = "localhost";
$DBusername = "root";
$password = "";
$database = "Multi_Option_Page";


# Database Variable connection handle
$connection = mysqli_connect($serverName, $DBusername, $password, $database) or die(mysql_error());

?>
