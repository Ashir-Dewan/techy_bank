<?php  include "db.php";

$db_Id=$_COOKIE["ABCD"];

$myQuery ="SELECT last_deposit,total_deposit  FROM information WHERE id = '$db_Id'";
    $runQuery=mysqli_query($dbconnection,$myQuery);

    while($myData = mysqli_fetch_array($runQuery))
    {
       $db_last_deposit = $myData["last_deposit"];
       $db_total_deposit = $myData["total_deposit"];
    }
    
?>