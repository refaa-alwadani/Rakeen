<?php
 
// Connect to server and select databse. 
$mysqli = new mysqli("localhost", "root", "12345678", "root");
$arrChartData[] = array();
$user = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE user_name = '$user'";
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
echo $row['user3'], '<br/>';
echo $row['spec'],'<br/>';
echo $row['spec_th'],'<br/>';
echo $row['level'],'<br/>';	
 echo "<br/>",$row['date_of_birth'],'<br/>';	

}


$arrChartData[] = array();
$user_m = $_SESSION['user_m'];
$sql = "SELECT * FROM rootm WHERE user_m = '$user_m'";
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
echo "<b  style=' font-size:19px; color:#d19f8d;'> Instituion: </b>",$row['name_company'], '<br/>';
echo "<b  style=' font-size:19px; color:#d19f8d;'> Career field : </b>",$row['field'], '<br/>';
echo "<b  style=' font-size:19px; color:#d19f8d;'> Instituion headquarters : </b>",$row['city_m'], '<br/>';

 	
}
?>