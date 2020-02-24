<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="bg-dark">
<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <?php 
           
            include_once "./dbConnect.php";
            $id = $_GET["id"];
            echo $id;
            $query = "SELECT *  FROM tbl_student WHERE stu_id='$id'";
            $result = mysqli_query ($connection ,$query);
            foreach ($result as $rows) {
                
           
            
                       
        ?>
        <div class="col-6">
            <div class="card bg-light shadow-lg">
                
                <div class="card-body">
                    <a href="index.php" class="btn btn-success">Go Back</a>
                    <hr>
                    <form action="#" method="post">
                        <!-- input username -->
                        <div class="form-group">
                            <label for="name">Student Name: </label>
                            <input type="text" id= "name" name="student-name" class="form-control" 
                            value="<?php echo $rows["stu_name"];?>" placeholder="Name" required>

                        </div>
                        <!-- input email -->
                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="email" id="email" name="student-email" class="form-control"
                            value="<?php echo $rows["stu_email"];?>" placeholder="Email" required>
                        </div>
                        
                        <!-- input gender -->
                        <div class="form-group">
                            <label for="gender">Gender: </label>
                            <select name="student-gender" id="gender" class="form-control">
                            <option  <?php if($rows['stu_gender'] == 'Male') {?> selected = 'selected' <?php } ?> 
                                value="Male">Male</option>
                                <option <?php if($rows['stu_gender'] == 'Female') {?> selected = 'selected' <?php } ?> 
                                 value="Female">Female</option>
                            </select>
                        </div>
                         <!-- input age  -->
                         <div class="form-group">
                            <label for="age">Age: </label>
                            <input type="number" id="age" name="student-age" class="form-control"
                            value="<?php echo $rows["stu_age"];?>" placeholder="Age" required>
                        </div>
                        <!-- button submit and reset -->
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" name="btn-submit">Edit Information</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
</body>
</html>

<?php
            }
    include_once "./dbConnect.php";
    if(isset($_POST["btn-submit"])){
        $name = $_POST["student-name"];
        $email = $_POST["student-email"];
        $gender = $_POST["student-gender"];
        $age = $_POST["student-age"];
        $id = $_GET["id"];
        $query = "UPDATE tbl_student SET 
         stu_name ='$name',stu_email='$email',stu_gender='$gender',stu_age='$age'
        WHERE stu_id = $id";
        $result = mysqli_query($connection,$query);
        if($result){
            header("location: index.php");
        }
    }
?>