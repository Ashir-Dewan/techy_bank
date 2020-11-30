<?php
if(isset($_COOKIE["ABCD"])){
header("location:dashboard.php");
}
?>

<?php
if(isset($_REQUEST["logout"])){
    setcookie("ABCD",$db_Id,time()+(86400*2));
    header("location:index.php");
}
?>