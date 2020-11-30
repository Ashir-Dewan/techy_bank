<?php

$host ="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bank";

$dbconnection = mysqli_connect($host,$dbusername,$dbpassword,$dbname);
if($dbconnection==false)
{
    echo "<h1>Error Establishing Database Connection</h1>";
}

?>
