<!-- <!DOCTYPE html> -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID Verification</title>
    <link rel="icon" type="image/x-icon" href="photos/sietk-logo.png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <style>
body {
    margin: 0;
    padding: 0;
    font-family: 'Roboto', Arial, sans-serif;
    background-color: #f4f4f4;
}

#container {
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

h1 {
    color: #333;
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

#searchInput {
    width: 100%;
    padding: 8px;
    margin-bottom: 20px;
    box-sizing: border-box;
}

table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #e6f7ff;
}

#userData td:last-child {
    text-align: center;
}

#userData td button {
    padding: 6px 12px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    cursor: pointer;
}

#userData td button:hover {
    background-color: #45a049;
}

    </style>
    <script>
        function validate(a)
        {
            // alert(a)
            // window.location.href = "http://www.gorissen.info/Pierre/maps/googleMapLocation.php?lat=elemA&lon=elemB&setLatLon=Set";
            window.location.href = "http://localhost/egatepassupdate/validate.php?id="+a;   
        }
    </script>
</head>
<?php
include('connection.php');
$password=$_POST['password'];

$sql = "select * from security where security='security'  and security_password ='$password'";  
        $result = mysqli_query($con, $sql); 
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        if($count == 1){
            echo "<h1>Security Login successful </h1>";  
        ?>
<div id="container">
    <h2>Live Search Users</h2>
    <input type="text" id="searchInput" placeholder="Enter user name">
    <table id="userTable">
        <thead>
            <tr>
            <th>Date</th>
                <th>ID</th>
                <th>Name</th>
                <th>DEPARTMENT</th>
                <th>CHEAK</th>
            </tr>
        </thead>
        <tbody id="userData">
        </tbody>
    </table>
</body>
</html>
</div>
<?php
        }else{
           echo("<h1>incorrect Password</h1>");
        }
?>
</html>