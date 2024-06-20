<?php
Session_start();
$showError = false;
$login = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_db.connect.php';
    $username = $_SESSION['username'];
    $title = $_POST["title"];
    $content = $_POST["content"];

    $sql = "INSERT INTO `blogcontent` VALUES (NULL, '$username', '$content', '$title')";
    $result = mysqli_query($conn, $sql);
    echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Blog Added Successfully
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>';

    header("location: welcome.php");
    
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

    <title>Add Blog!</title>
  </head>
  <body>
        <?php require 'nav.php'?>
        ?>
        <div class="container">
        <form action="/blog%20management/add.php" method="post">
        <h3>Add your thoughts</h3>
        <div class="form-group">
            <label for="title">Give a unique title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="content">Write the main content here</label>
            <textarea class="form-control" id="content" name="content" rows="8"></textarea>
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