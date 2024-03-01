<?php
include('connection.php');  
     session_start();
     $id=$_SESSION["Sid"];    
     $password=$_POST['password'];
      $sql = "UPDATE `students` SET `password`='$password' WHERE `sid`='$id'";
        $result = mysqli_query($con, $sql);
        if($result){
           $message = "your password is updated successfully hh";
echo "<script type='text/javascript'>alert('$message');

location.replace('index.php');
</script>";
             
        }
?>
// history.back('index.php');