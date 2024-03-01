
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Details </title>
  <link rel="icon" type="image/x-icon" href="photos/sietk-logo.png">
  
<style>
  body{
    margin: 0%;
            padding: 0%;
            font-family: Roboto, Arial, sans-serif;
  }
  /* table{
               border-collapse: collapse;
               width:100%;
           }
           td{
             text-align:center;
             padding:10px;
           }
          
           tr:nth-child(odd) {
          background-color: #999DA0;
          } */
        #click{
          background-color:green;
        }
      
        #c1{
         color:white;
          
          background-color: #35fc03;
          
        }
        #c0{
          color:white;
          
          background-color: red;
          
        }
        #c2{
          color:white;
          
          background-color: #3498db;
          
        }
        h1 {
  font-family: 'Arial', sans-serif; /* Use a professional-looking font */
  font-size: 36px; /* Adjust the font size as needed */
  color: #333; /* Set the text color */
  text-align: center; /* Center the text within the h1 tag */
  text-transform: uppercase; /* Uppercase the text for a bold look */
}
        .student_name{
          text-decoration:none;
          color:black;
        }
        /* #thead{
          background-color: #4caf50;
          color:white;
        } */
        /* Apply a reset to remove default styles */
table {
  border-collapse: collapse;
  width: 100%;
  margin-top: 20px; /* Add some space above the table */
}

/* Style the table header */
#thead {
  background-color: #3498db; /* Blue background for header */
  color: #fff; /* White text color */
}

#thead td {
  font-weight: bold;
  padding: 12px;
  text-align: center;
}

/* Style the table rows */
tr {
  border-bottom: 1px solid #ddd; /* Border color between rows */
}

/* Apply zebra striping to odd rows */
tr:nth-child(odd) {
  background-color: #f9f9f9; /* Lighter background color for odd rows */
}

/* Style the table cells */
td {
  padding: 12px;
  text-align: center;
}

/* Hover effect for better interactivity */
tr:hover {
  background-color: #e0e0e0; /* Lighter background color on hover */
}

/* Style the links inside the table */
a {
  text-decoration: none;
  color: #3498db; /* Blue color for links */
}

/* Style the button */
button {
  display: inline-block;
  padding: 8px 10px; /* Adjust the padding for a smaller size */
  font-size: 14px; /* Adjust the font size for a smaller size */
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  cursor: pointer;
  border: none;
  border-radius: 6px; /* Adjust the border-radius for a smaller rounded look */
  transition: background-color 0.3s, color 0.3s;
}

button:hover {
  background-color: #3498db;
  color: #fff;
}


/* Style the div with permission information */
div[id^="c"] {
  display: inline-block;
  padding: 5px;
  color: #fff;
  font-weight: bold;
}

/* Add some spacing for better readability */
.student_name {
  margin-right: 10px;
}
span{
  color:green;
  font-weight:bold;

}

/* Apply some styles for the link inside the button */


</style>

</head>
<script>
  var reason=null;
  </script>
<body>

<?php      
    include('connection.php');  
    session_start(); 
        $sql = "select *from login where course_name = '$_SESSION[course_name]' and year='$_SESSION[year]' and password = '$_SESSION[password]'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count == 1){
            echo "<h1>".$_SESSION['course_name']." Login Successful  <button> Add Student </button><button> Update Acadamic</button><button>Delete Students</button></h1> "; 
            echo "";
            $sql="select * FROM students where course='$_SESSION[course_name] ' and year=$_SESSION[year] ";
            $result = $con->query($sql);
            if ($result->num_rows > 0){
               ?>
              <table>
              <tr id="thead">
                  <td>STUDENTS</td>
                  <td>PERMISSION</td>
              </tr><?php
              while($row = $result->fetch_assoc()) {
              ?>
                <tr>
                   <td><a href="student_history.php?id=<?php echo $row['sid'];?>&name=<?php echo $row['student_name'];?>" class="student_name" target="_blank"><?php echo $row['student_name'];?></a> <?php if($row['permission']==2){echo "<span> Request</span>";} ?></td>
                   <td><a href="reason.php?id=<?php echo $row['sid'];?>&name=<?php echo $row['student_name'];?>"   id="click" target="_blank"><button id="c<?php echo $row['permission']; ?>">click </button></a></td>
                </tr>
<?php
              }
              echo'</table>';
              $con->close();
            } 
          } 
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  
</body>
</html>
