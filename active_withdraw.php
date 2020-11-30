<?php
if(isset($_REQUEST["wbtn"])){

$wbox = $_REQUEST["wbox"];

include "withdraw.php";
include "balance.php";

if($wbox>$db_Balance)
{
    header("location:dashboard_design.php?message=Balance is too low for withdraw.");
}else{

    
    $db_Id=$_COOKIE["ABCD"];

    $myQuery ="UPDATE information SET balance='$db_Balance'-'$wbox',last_withdraw='$wbox',total_withdraw='$db_total_withdraw'+'$wbox' WHERE id = '$db_Id'";
    $runQuery=mysqli_query($dbconnection,$myQuery);
    header("location:dashboard_design.php?id=$db_Id");
}
}
?>