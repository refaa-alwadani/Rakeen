<style>
.divt{
	border:1px solid #a5a5a5;
	width:400px;
	padding:5px 30px 30px;
	margin-bottom:5px;
	font-size:20px;
	-moz-border-radius:17px;
    -webkit-border-radius:17px;
}
/*ستايل الترتيب لتقسيم التالي والسابق*/
.odd{
	background-color:#ccc;}
div.pagination {
	padding: 3px;
	margin: 3px;}
div.pagination a {
	padding: 2px 5px 2px 5px;
	margin: 2px;
	border: 1px solid #AAAADD;
	text-decoration: none; /* no underline */
	color: #000099;}
div.pagination a:hover, div.pagination a:active {
	border: 1px solid #000099;
	color: #000;}
div.pagination span.current {
	padding: 2px 5px 2px 5px;
	margin: 2px;
		border: 1px solid #000099;
		font-weight: bold;
		background-color: #000099;
		color: #FFF;}
	div.pagination span.disabled {
		padding: 2px 5px 2px 5px;
		margin: 2px;
		border: 1px solid #EEE;
		color: #DDD;}
</style>
<script src="js/jquery-2.1.3.min.js"></script>
<div class='lest_test'>
<?php
if (isset($_SESSION['username']) and isset($_SESSION['username'])){
	require_once('login/connect.php');
	$tbl_name="sq_m";		//your table name
	$adjacents = 3;
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($mysqli,$query));
	$total_pages = $total_pages['num'];
	echo"
	<center>
	Number of jobs
	<br/><br/>
	<div class='divt'>
	 $total_pages 
	 </div>
	 </center>";
	?>
	</div>
	<div class='lest_test'>
	<?
echo "<center><h2> Functions </h2></center>";
$user_m = $_SESSION['user_m'];
	$tbl_name="sq_m";		//your table name
	$adjacents = 3;
	$query = "SELECT COUNT(*) as num FROM $tbl_name";
	$total_pages = mysqli_fetch_array(mysqli_query($mysqli,$query));
	$total_pages = $total_pages['num'];
	$targetpage = "index.php";
	$limit = 3; 	
	$page = $_GET['page'];
	if($page)
		$start = ($page - 1) * $limit;
	else
		$start = 0;		
	$sql = "SELECT * FROM $tbl_name ORDER BY id_sq DESC LIMIT $start, $limit";
	$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
	if ($page == 0) $page = 1;		
	$prev = $page - 1;						
	$next = $page + 1;						
	$lastpage = ceil($total_pages/$limit);		
	$lpm1 = $lastpage - 1;					
	$pagination = "";
	if($lastpage > 1){
		$pagination .= "<div class=\"pagination\">";
		if ($page > 1)
			$pagination.= "<a href=\"$targetpage?page=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";
		if ($lastpage < 7 + ($adjacents * 2)){
			for ($counter = 1; $counter <= $lastpage; $counter++){
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
		}elseif($lastpage > 5 + ($adjacents * 2)){
			if($page < 1 + ($adjacents * 2)){
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)){
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}else{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}}}
		if ($page < $counter - 1)
			$pagination.= "<a href=\"$targetpage?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";
	}
	while($row = $res->fetch_object()) {
	echo"
	<center>
	<div class='divt'>
	<br/>
	<label style='font-size:20px;'> Name function
	</label>
	<a href='print_test.php?id_sq=$row->id_sq'>$row->name_function</a>
	</center>
	<br/>
	";
	}
	
	
}

if (isset($_SESSION['user_m']) and isset($_SESSION['user_m'])){
	echo "<center><h2> Company tests </h2></center>";


require_once('login/connect.php');
	$tbl_name="sq_m";		//your table name
	$adjacents = 3;
	$user_m = $_SESSION['user_m'];
	$query = "SELECT COUNT(*) as num FROM $tbl_name WHERE user_m='$user_m'";
	$total_pages = mysqli_fetch_array(mysqli_query($mysqli,$query));
	$total_pages = $total_pages['num'];
	$targetpage = "index.php";
	$limit = 3; 	
	$page = $_GET['page'];
	if($page)
		$start = ($page - 1) * $limit;
	else
		$start = 0;		
	$sql = "SELECT * FROM $tbl_name ORDER BY id_sq DESC LIMIT $start, $limit";
	$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
	if ($page == 0) $page = 1;		
	$prev = $page - 1;						
	$next = $page + 1;						
	$lastpage = ceil($total_pages/$limit);		
	$lpm1 = $lastpage - 1;					
	$pagination = "";
	if($lastpage > 1){
		$pagination .= "<div class=\"pagination\">";
		if ($page > 1)
			$pagination.= "<a href=\"$targetpage?page=$prev\">« previous</a>";
		else
			$pagination.= "<span class=\"disabled\">« previous</span>";
		if ($lastpage < 7 + ($adjacents * 2)){
			for ($counter = 1; $counter <= $lastpage; $counter++){
				if ($counter == $page)
					$pagination.= "<span class=\"current\">$counter</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
		}elseif($lastpage > 5 + ($adjacents * 2)){
			if($page < 1 + ($adjacents * 2)){
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2)){
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";
			}else{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++){
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";}}}
		if ($page < $counter - 1)
			$pagination.= "<a href=\"$targetpage?page=$next\">next »</a>";
		else
			$pagination.= "<span class=\"disabled\">next »</span>";
		$pagination.= "</div>\n";
	}
	while($row = $res->fetch_object()) {
echo "
<div class='divt'>
<label style='font-size:20px;'> Name function
	</label>
<a href='print_test.php?id_sq=$row->id_sq'> $row->name_function </a>
</div>
";
}
}
?>
<?=$pagination?>

</div>
<?