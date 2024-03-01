<!DOCTYPE html>
<?php      
    include('connection.php'); 
    $id=$_GET['id'];
    $name=$_GET['name'];
    ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?></title>
    <style>
    body{
    margin: 0%;
            padding: 0%;
            /* background-color: lightcoral; */
            /* display: flex; */
            /* justify-content: center; */
            font-family: Roboto, Arial, sans-serif;
  }
  table{
               border-collapse: collapse;
               width:100%;
           }
           td{
             text-align:center;
             padding:10px;
           }
          
           tr:nth-child(odd) {
          background-color: #999DA0;
          }        
        h1{
          font-weight: normal;
            text-align: center;
        }
        #thead{
          background-color: #4caf50;
          color:white;
          font-weight:strong;
        }
        .reason{
          max-width: 200px;
        }
       
</style>

</head>
<body>

    <?php
        $sql = "SELECT * FROM `permission_history` WHERE student_id='$id'";  
        $result = mysqli_query($con, $sql);  
        // $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count >0){
               ?>
               <h1>History</h1>
               <h1><?php echo $name."(".$count.")"; ?></h1>
              <table>
              <tr id="thead">
                  <td>S.No</td>  
                  <td>Date</td>
                  <td class="reason">Reason</td>
                  <td>Time Of Get Permission</td>
                  <td>Out Time</td>
              </tr><?php
              $sno=1;            
            //   while($row=mysqli_fetch_assoc($result)) {
                while($row=mysqli_fetch_assoc($result)) {
              ?>
                <tr>
                   <td><?php echo $sno; $sno=$sno+1;?></td>
                   <td><?php echo $row['date'];?></td>
                   <td class="reason"><?php echo $row['reason'];?></td>
                   <td><?php echo $row['time_of_get_permission'];?></td>
                   <td><?php echo $row['out_time'];?></td>
                </tr>
<?php
              }
              echo'</table>';
              $con->close();
            } 
        else{  
            echo "<h1>zero rows</h1>";  
        }     
?>  
</body>
</html>