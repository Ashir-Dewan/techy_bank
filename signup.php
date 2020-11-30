<?php
if(isset($_COOKIE["ABCD"])){
header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Techy Bank</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>



            <div id="login area">
            <h1 class="text-center">Welcome to Techy Bank</h1>


<?php
if(isset($_REQUEST["message"])){
    $msg = $_REQUEST["message"];
    echo "<div class='submit-area text-center'><h4>$msg</h4></div>";
}
?>



        <form action="signup_core.php" method="post">
            <div class="submit-area">
                <h4>Register</h4>
                <br>
                <input type="text" placeholder="Username" class="form-control" name="username">
                <br>
                <input type="email" placeholder="example@gmail.com" class="form-control" name="email">
                <br>
                <input type="password" placeholder="Password" class="form-control" name="password">
                <br>
                <input type="submit" id="login" value="Sign Up" class="btn btn-success" name="signup">
             </div>
    </div>

        </form>

      
</body>
</html>