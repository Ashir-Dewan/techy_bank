<?php include "db.php";?>

<?php

    $rname = $_REQUEST["username"];
    $remail = $_REQUEST["email"];
    $rpass = $_REQUEST["password"];

    $myQuery ="INSERT INTO information ( username , email , password ) VALUES ('$rname','$remail','$rpass');";
    $runQuery=mysqli_query($dbconnection,$myQuery);

    if($runQuery==true){
        header("location:index.php?message=SignUp Successfull");

    }
    else{
        echo "SignUp Failed";
    }
    

?>