 <?php
 include('connection.php');  
     session_start();
     $id=$_SESSION["Sid"];    
     $_SESSION["password"];
     $date=date("d-M-Y");
    //  $sql = "SELECT `request` FROM permission_history WHERE student_id='$id' and date='$date' and request=0";
    //     $result = mysqli_query($con, $sql);
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    //     $history_count=mysqli_num_rows($result);  
    //     $sql = "SELECT `request` FROM permission_history WHERE student_id='$id' and date='$date' and request=2";
    //     $result = mysqli_query($con, $sql);
    //     $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
    //     $reject_count=mysqli_num_rows($result);  
        $sql = "SELECT student_name,`permission` FROM `students` WHERE  sid='$id'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
        
// if($history_count==0 || $reject_count>0 && $row['permission']==0 ){ 
    if($row['permission']==0){
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Letter to Department</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            /* display: flex; */
            /* align-items: center;
            justify-content: center;
            height: 100vh; */
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            max-width: 100%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        textarea {
            height: 150px;
            resize: none;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #45a049;
        }
        #nav{
            height:3em;
            width:100%;
            background:#3498db;
            display:flex;
            align-items: center;
            /* justify-content: center; */
        }
        #box{
             display: flex;
            align-items: center;
            justify-content: center;
           
            height: 100vh;
        }
        h3
        {
            color:white;
            /* background-color:red;
            max-width:auto; */
        }
        #history{
            color:white;
            margin-left:auto;
            margin-right:10px;
            cursor:pointer;
            
        }
        a{
            text-decoration:none;
            color:white;
        }
    </style>
</head>

<body>
    <div id="nav">
<h3>  &emsp;Hello : <?php echo $row['student_name'];?> &emsp;</h3>
        <div id="history"> <a href="change-password.php">Change Password</a></div>
    </div>
    <div id="box">
    <form action="create_request.php" method="post">
        
        <label for="subject">Subject :</label>
        <input type="text" id="subject" name="subject" required>

        <label for="letterContent">Letter Content:</label>
        <textarea id="letterContent" name="letterContent" required></textarea>

        <button type="submit">Submit Letter</button>
    </form>
    </div>
</body>
</html>
<?php
}else{
    header('Location:status.php');
}
?>