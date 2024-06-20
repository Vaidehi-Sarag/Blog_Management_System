 <?php
    include '_db.connect.php';
   if(isset($_GET['id'])){
       $id = $_GET['id'];
    
    
        $sql = "DELETE FROM `blogcontent` WHERE `sno` = '$id'";
       $result = mysqli_query($conn, $sql);
      
       header("location: welcome.php");

   }
?> 