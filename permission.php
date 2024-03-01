<?php
include('connection.php');
session_start();
$id=$_GET['sid'];
$reason=$_GET['reason'];
$date=date("d-M-Y");
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time= date('H:i:s');

if (isset($_GET['granted'])){
    // Check if the 'name' input field is set in the form

$sql = "select * from students where sid='$id'";  
        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
        if($count == 1){
        $sname= $row['student_name'];
$sql1="UPDATE `permission_history` SET `request`='1',`time_of_get_permission`='$time' WHERE `student_id`='$id' and `date`='$date'";
$result = mysqli_query($con, $sql1);
$sql2="INSERT INTO `temp_history`(`sid`, `sname`, `department`, `date`, `out_time`) VALUES ('$id','$sname','$_SESSION[course_name]','$date','inside')";
$result = mysqli_query($con, $sql2);
$sql="update students SET permission=1 where sid='$id'";
$result = mysqli_query($con, $sql);
if($result){
    header('Location:authentication.php');
}else{
    echo "something is wrong";
}
}
}

if (isset($_GET['Reject'])){
   
$sql = "select * from students where sid='$id'";  
        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        $count = mysqli_num_rows($result);  
        if($count == 1){
        $sname= $row['student_name'];
$sql1="UPDATE `permission_history` SET `request`='2',`time_of_get_permission`='Reject' WHERE `student_id`='$id' and `date`='$date'";
$result = mysqli_query($con, $sql1);
$sql="update students SET permission=0 where sid='$id'";
$result = mysqli_query($con, $sql);
if($result){
    header('Location:authentication.php');
}else{
    echo "something is wrong";
}
}
}
?>






