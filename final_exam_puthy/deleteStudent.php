<?php
  
    include_once "./dbConnect.php";
    $id = $_GET["id"];
    echo $id;
    $query = "DELETE FROM tbl_student WHERE stu_id='$id'";
    $result = mysqli_query($connection,$query);
    if($result){
        header("location: index.php");
    }

  
?>