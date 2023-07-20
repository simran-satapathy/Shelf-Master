<?php
$server="localhost";
$username="root";
$password="";
$dbname="database111";

$conn=mysqli_connect($server,$username,$password,$dbname);
if(!$conn->connect_error)
    echo "Connection Sucessful";

?>