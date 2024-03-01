<?php
 include('connection.php'); 
  $Mca_count=0;
   $mtech_count =0;
    $btech_count =0;
    $Mba_count =0;
$date=date("d-M-Y");
$sql="SELECT `request` FROM `permission_history` WHERE department='MCA' and date='$date'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
    $Mca_count = mysqli_num_rows($result); 
    $sql="SELECT `request` FROM `permission_history` WHERE department='M-tech' and date='$date'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
    $mtech_count = mysqli_num_rows($result); 
    $sql="SELECT `request` FROM `permission_history` WHERE department='B-tech' and date='$date'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
    $btech_count = mysqli_num_rows($result); 
    $sql="SELECT `request` FROM `permission_history` WHERE department='MBA' and date='$date'";
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);  
    $Mba_count = mysqli_num_rows($result); 
$dataPoints = array( 
	array("y" => $Mca_count,"label" => "MCA" ),
	array("y" => $Mba_count,"label" => "MBA" ),
	array("y" => $mtech_count,"label" => "Mtech" ),
	array("y" => $btech_count,"label" => "btech" )
	
);
?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function() {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "Today Outgoing Student Analatics"
	},
	axisY: {
		title: "Memders",
		includeZero: true,
		prefix: "",
		suffix:  "m"
	},
	data: [{
		type: "bar",
		// yValueFormatString: "#,##0m",
        yValueFormatString: "#,##0m",
		indexLabel: "{y}",
		indexLabelPlacement: "inside",
		indexLabelFontWeight: "bolder",
		indexLabelFontColor: "white",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>    
<?php
?>