<?php
if(isset($_REQUEST["dbtn"])){

$dbox = $_REQUEST["dbox"];

if($dbox<=0)
{
    header("location:dashboard_design.php?message=Too low amount for deposit.");
}else{

    include "deposit.php";
    include "balance.php";
    $db_Id=$_COOKIE["ABCD"];

    $myQuery ="UPDATE information SET balance='$db_Balance'+'$dbox',last_deposit='$dbox',total_deposit='$db_total_deposit'+'$dbox' WHERE id = '$db_Id'";
    $runQuery=mysqli_query($dbconnection,$myQuery);
    header("location:dashboard_design.php?id=$db_Id");
}
}
?>