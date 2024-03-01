
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Valide ID</title>
        <link rel="icon" type="image/x-icon" href="photos/sietk-logo.png">
        <style>
            body{
                font-family: Roboto, Arial, sans-serif;
            }
            #green{
                top:10px;
                width: 280px;
                height:360px;
                background-color:#35fc03;
                border-radius:5px;
                display: inline-block;
        margin: 0 auto;
        padding: 3px;
                
            }
            #photo{
                position: relative;
                top:15px;
                /* left:15px; */
                width: 250px;
                height:330px;
                object-fit:cover;
                
            }
            #name{
                height: 50px;
                width:100%;
                
            }
            #sname{
                text-align:center;
            }
            #but{
                position:relative;
                background-color:#0275d8;
                padding:10px 20px 10px 20px;
                border-radius:5px;
                font-size:18px;
                color:white;
            }
.center{
    position: relative;
    
    text-align: center;
}
#container{
    height:360px;
    width:100%;
    text-align: center;    
  }
            h3{
                font-weight: normal;
            text-align: center;
            }
        </style>
    </head>
<?php
include('connection.php');
$id=$_GET['id'];
$date=date("d-M-Y");
date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)
$time= date('H:i:s');
$sql = "select * from students where sid='$id' and  permission=1";  

        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){
            ?>
            <div id="container">
            <div id="green">
            <div>
           <img src="<?php echo "photos/".$row['photo']; ?>"  id="photo"/>
            </div>
            </div>
            </div>
            <div id="name"><h3 id="sname"><?php echo $row['student_name'];?></h3></div>
            <?php
            $sname=$row['student_name'];
            // echo $row['photo']
            $sql1="UPDATE permission_history SET out_time='$time' WHERE student_id='$id' and date='$date' and out_time='inside'";
            $result = mysqli_query($con, $sql1);
            $sql="update students SET permission=0 where sid='$id'";
            $result = mysqli_query($con, $sql);
            $sql="DELETE FROM `temp_history` WHERE sid='$id' and date='$date'";
            $result = mysqli_query($con, $sql);
            if($result){
                echo '<br>
                <div class="center"><button id="but" onclick="history.back();">Submit</button></div>'; 
            }
        }else{
            echo("<h3>Invalide ID</h3>");
            echo '<br>
               <div class="center"><button id="but" onclick="history.back();">Submit</button></div>';
        }
?>
</html>