<?php      
    include('connection.php');  
    session_start();
    $_SESSION["course_name"] = $_POST['course_name'];  
    $_SESSION["year"] =  $_POST['year']; 
    $_SESSION["password"] = $_POST['password'];
    header('location:authentication.php');
    ?>