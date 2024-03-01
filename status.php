 <?php
 include('connection.php');  
    session_start();
    $id= $_SESSION["Sid"];    
    $date=date("d-M-Y");
    $sql="SELECT reason,request FROM permission_history WHERE student_id='$id' and date='$date' ORDER BY time_of_request DESC LIMIT 1";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
    $count = mysqli_num_rows($result); 

    // $sql = "SELECT permission FROM `students` WHERE sid='$id'";
    // $result = mysqli_query($con, $sql);  
    // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    // $permission=$row['permission'];
    if($count==1){
      $request_status=0;
      if($row['request']==0){
         $request_status='pending...';
      }else if($row['request']==1){
         $request_status='accepted';
      }else if($row['request']==2){
         $request_status='reject';
      }else{
         $request_status='unexpected condition';
      }
      ?>
        <!DOCTYPE html>
   <html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Student Status</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Container styles */
        .container {
            display: flex;
            padding: 10px;
            /* You can adjust the padding value as needed */
            box-sizing: border-box;
            overflow: hidden;
            /* Clear float to contain child divs*/
            border-style: solid;
            border-radius: 0.3rem;
            border-color: #3498db;
            /* background-color: #3498db; */
        }

        /* First division styles (80% width) */
        .div1 {
            flex: 0 0 80%;
            /* background-color: #e0e0e0; */
            /* Just for visibility */
            box-sizing: border-box;
            /* margin-right: 0.5em; */
        }

        /* Second division styles (20% width) */
        .div2 {
            flex: 0 0 20%;
            /* background-color: #c0c0c0; */
            /* Just for visibility */
            box-sizing: border-box;
            margin-right: 0.5em;
        }

        h1 {
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> Your Last Request Status</h1>
    <div class="container">
        <div class="div1">
            <!-- Content for the first division goes here -->
            <p><?php echo $row['reason']; ?></p>
        </div>

        <div class="div2">
            <!-- Content for the second division goes here -->
            <p>Status: <?php echo $request_status;?></p>
        </div>
    </div>

</body>

</html>
<?php
    }else{
 echo "there is incompleted session is there pls delete the request";
 
    }
    ?>