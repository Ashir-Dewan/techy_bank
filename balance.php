<?php  include "db.php";

$db_Id=$_COOKIE["ABCD"];

$myQuery ="SELECT balance FROM information WHERE id = '$db_Id'";
    $runQuery=mysqli_query($dbconnection,$myQuery);

    while($myData = mysqli_fetch_array($runQuery))
    {
       $db_Balance = $myData["balance"];
      
    }
    
?>