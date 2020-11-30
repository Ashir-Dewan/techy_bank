<?php  include "balance.php";?>
<?php  include "deposit.php";?>
<?php  include "withdraw.php";?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<?php

if(isset($_REQUEST["id"])){
    $db_Id = $_REQUEST["id"];
 
     $myQuery ="SELECT * FROM information WHERE id = '$db_Id';";
     $runQuery=mysqli_query($dbconnection,$myQuery);
 
     while($myData = mysqli_fetch_array($runQuery))
     {
         $db_Username = $myData["username"];
         echo "<div class='submit-area text-center'><h4>Welcome $db_Username </h4></div>";
     }
   
 }
 
 else{
 echo "<h2 style='color:orange'><b><i>You Perform An Invalid Operation.</i></b> </h2>";
 }
?>
<div class="row">
            <div class="col-md-4">
                    <div class="deposit status">
                        <h5>Last Deposit</h5>
                        <h2>$<span id="currentDeposit"><?php echo $db_last_deposit;?></span></h2>

                        <h5>Total Deposit</h5>
                        <h2>$<span id="currentDeposit"><?php echo $db_total_deposit;?></span></h2>
                    </div>
            </div>
            
            
            <div class="col-md-4">
                    <div class="withdraw status">
                        <h5>Last Withdraw</h5>
                        <h2>$ <span id="currentWithdraw"><?php echo $db_last_withdraw;?></span></h2>

                        <h5>Total Withdraw</h5>
                        <h2>$ <span id="currentWithdraw"><?php echo $db_total_withdraw;?></span></h2>
                    </div>
                    <?php
                        if(isset($_REQUEST["message"])){
                        $msg = $_REQUEST["message"];
                         echo "<div class='submit-area text-center'><h4>$msg</h4></div>";
                        }
                    ?>
            </div>


            <div class="col-md-4">
                    <div class="balance status">
                        <h5>Total Balance</h5>
                        <h2>$<span id="currentBalance"><?php echo $db_Balance;?></span></h2>
                    </div>
            </div>

</div>
       
       
        <div class="row">
                
                <form action="active_deposit.php" method="post">
                
                <div class="submit-area">
                    <div class="col-md-6">
                        <h4>Deposit</h4>
                        <input id="DepositAmount" type="text" placeholder="$amount you want to deposit" class="form-control" name="dbox">
                        <br>
                        <button id="addDeposit" class="btn btn-success" name="dbtn">Deposit</button>
                    </div>
                </div>
                
                </form>
                

                <form action="active_withdraw.php" method="post">
                
                <div class="submit-area">
                    <div class="col-md-6">
                        <h4>Withdraw</h4>
                        <input id="withdrawAmount" type="text" placeholder="$amount you want to withdraw" class="form-control" name="wbox">
                        <br>
                        <button id="addwithdraw" class="btn btn-success" name="wbtn">Withdraw</button>
                    </div>
                </div>

                </form>


                <form action="logout_core.php" method="post">
                
                <div class="submit-area">
                    <div class="col-md-6">
                        <h4>Logout Hare</h4>
                        <input type="submit" value="Logout" class="btn btn-success" name="logout">
                    </div>
                </div>

                    
                </form> 
           
        </div> 

              

        