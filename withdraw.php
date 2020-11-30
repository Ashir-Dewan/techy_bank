<?php  include "db.php";

$db_Id=$_COOKIE["ABCD"];

$myQuery ="SELECT last_withdraw,total_withdraw  FROM information WHERE id = '$db_Id'";
    $runQuery=mysqli_query($dbconnection,$myQuery);

    while($myData = mysqli_fetch_array($runQuery))
    {
       $db_last_withdraw = $myData["last_withdraw"];
       $db_total_withdraw = $myData["total_withdraw"];
    }
    
?>