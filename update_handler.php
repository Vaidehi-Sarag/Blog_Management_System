<?php
include '_db.connect.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE `blogcontent` SET `title` = '$title', `content` = '$content' WHERE `sno` = '$id'";
        $result = mysqli_query($conn, $sql);
        
        if ($result) {

            header("Location: welcome.php");
            
        } 
}

}
?>
