<?php
$showError = false;
$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_db.connect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $existSql = "Select * from `users` WHERE username = '$username'";
    $result = mysqli_query($conn,$existSql);
   $numrows = mysqli_num_rows($result);
    if($numrows > 0){
        $showError = "username already exsist";
    }else{
        if($password == $cpassword){
            $sql = "INSERT INTO `users` VALUES (NULL, '$username', '$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                $showAlert = true;
            }
        }else{
            $showError = "Incorrect password";
        }
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>SignUp!</title>
  </head>
  <body>
        <?php require 'nav.php'?>
        <?php
        if($showError){
           echo' <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> '. $showError.'
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        if($showAlert){
           echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>  Login to continue
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>';
        }
        ?>
        <div class="container">
        <h1>Please Signup!</h1>
        <form action="/blog%20management/signup.php" method="post">
        <div class="form-group">
            <label for="username">Usernamae</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="form-group">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>