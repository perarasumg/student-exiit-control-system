
<?php
include('connection.php');

if (isset($_POST['searchTerm'])) {
    $searchTerm = $_POST['searchTerm'];
    $date=date("d-M-Y");
    // CONCAT(student_id, sname, department) 
    // WHERE CONCAT(id, name, email) LIKE '%example%';
    // $sql = "SELECT `student_id`, `sname`, `department` FROM `permission_history` WHERE  date='$date' and student_id LIKE '%$searchTerm%' or sname like '%$searchTerm%'  AND out_time='inside' ";  
    $sql = "SELECT `sid`, `sname`, `department`, `date` FROM `temp_history` WHERE out_time='inside' and date='$date' AND  sid LIKE '%$searchTerm%' or sname like '%$searchTerm%'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            // $id=$row['student_id'];
            echo "<tr> ";
            echo "<td>" . $row['date'] . "</td>";
            echo "<td>" . $row['sid'] . "</td>";
            echo "<td>" . $row['sname'] . "</td>";
            echo "<td>" . $row['department'] . "</td>";
            ?>
            <td> <button onclick="validate('<?php echo $row['sid']?>')">Check</button></td>;
            <?php
            // echo "<td> <a href='validate.php?id=".$row['student_id'].'&name='.$row['sname']."><button>Check</button></a></td>";
            // echo "<td> <a href='validate.php?id=".$id."><button>Check</button></a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='3'>No users found</td></tr>";
    }
}
$con->close();
?>