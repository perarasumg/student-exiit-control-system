<?php
session_start();
include('connection.php');
$id=$_GET['id'];
$name=$_GET['name'];
$date=date("d-M-Y");
?>
   <?php
    $sql = "SELECT permission FROM `students` WHERE sid='$id'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $permission=$row['permission'];
    $count = mysqli_num_rows($result);  
    if($count ==1 && $permission==2){
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grant or Reject Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        #form-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        #form-container textarea {
            width: 400px;
            min-height: 100px;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            resize: none;
            text-align: justify;
        }

        .submit-button {
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #submit-grant {
            background-color: #4caf50;
            color: #fff;
        }

        #submit-reject {
            background-color: #e74c3c;
            color: #fff;
        }

        .submit-button:hover {
            background-color: #333;
        }
    </style>
</head>

<body>
    <div id="form-container">
 <?php
    $sql="SELECT `sname`, `reason` FROM `permission_history` WHERE student_id='$id' and request='0' and department='$_SESSION[course_name]' and date='$date'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 
    if($count==1){
    ?>
        <h2>Requested by :<?php echo $row['sname'];?></h2>
        <form action="permission.php" method="get">
            <input type="text" name="sid" id="" hidden value="<?php echo $id;?>">
        <textarea
            readonly name="reason"><?php echo $row['reason']; ?></textarea>
        <br>
        <button id="submit-grant" class="submit-button" type="submit" name="granted" value="granted">Grant Permission</button>
        <button id="submit-reject" class="submit-button" type="submit" name="Reject" value="reject">Reject</button>
        <form>
            <?php
    }else{
        echo"yesterday request unable to access";
    }
            ?>
    </div>
</body>

</html>
<?php
}else if($permission==1){
    echo" already have grant permission unable to give";
}else if($permission==0){
    echo" the person did'nt have any request";
}
?>