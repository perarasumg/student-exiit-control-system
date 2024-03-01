<?php      
    include('connection.php');  
    session_start();
    $_SESSION["Sid"] = $_POST['Sid'];   
    $_SESSION["password"] = $_POST['password'];
        $sql = "select * from students where sid = '$_SESSION[Sid]' and password = '$_SESSION[password]'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1)
        {
            header('location:student-request.php');
    }else{
        echo "password incorrect";
    }
    ?>