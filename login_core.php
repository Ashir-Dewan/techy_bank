<?php include "db.php";

if(isset($_REQUEST["login"])){

    
        $uname = $_REQUEST["username"];
        $upass = $_REQUEST["password"];

        if(empty($uname)==false && empty($upass)==false){
        $myQuery ="SELECT * FROM information WHERE username = '$uname';";
        $runQuery=mysqli_query($dbconnection,$myQuery);

        if(mysqli_num_rows($runQuery)==0){
            header("location:index.php?message=There is no account of this information");
        }else{
            while($myData = mysqli_fetch_array($runQuery))
            {
                $db_Id = $myData["id"];
                $db_Username = $myData["username"];
                $db_Password = $myData["password"];
                //echo "<h2 style='color:orange'><b><i>$username</i></b> </h2>";
                //echo "<h2 style='color:orange'><b><i>$password</i></b> </h2>";
                    if($db_Username==$uname && $db_Password==$upass){
                        setcookie("ABCD",$db_Id,time()+86400);
                        header("location:dashboard_design.php?id=$db_Id");
                    }
                    else{
                        header("location:index.php?message=Invalid Input");
                    }
    
            }
        }
       
        }else{
            header("location:index.php?message=Must fill both box.");
        }
    }


else{
    echo "<h2 style='color:orange'><b><i>You Perform An Invalid Operation.</i></b> </h2>";
}



?>