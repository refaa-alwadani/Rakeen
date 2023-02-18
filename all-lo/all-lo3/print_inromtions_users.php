<p style="border:2px solid #a5a5a5;
font-size:22px;
background-color:#cac9cb;	
	margin:auto 30%;
	padding:20px;
	    -moz-border-radius:17px;
-webkit-border-radius:17px; text-align:center;">
<?php
 
// Connect to server and select databse. 
$mysqli = new mysqli("localhost", "root", "12345678", "root");
$arrChartData[] = array();
$user=$_GET['user_name'];
$sql = "SELECT * FROM users WHERE user_name = '$user'";
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	
echo $row['user3'], '<br/>';
echo $row['spec'],'<br/>';
echo $row['spec_th'],'<br/>';
echo $row['level'],'<br/>';	
echo $row['number'],'<br/>';
echo $row['user_email'],'<br/>';
 echo "<br/>",$row['date_of_birth'],'<br/>';	

}


?>
</p>