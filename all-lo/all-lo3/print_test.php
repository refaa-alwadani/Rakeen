
<?php
// هذا كود السجن 
header('Content-type: text/html; charset=utf-8');

session_start();

include("includes/header.php");
?>

   <link rel="stylesheet" href="css/main.css">  

<style>
.label{
	font-size:20px;
	
}
.borderw{
	border:1px solid #aaa;
	padding:20px 40px;
	
	align:right;
margin:10px 30px 20px auto;
	
}
.buttonw{
	padding:15px 15px;
	margin-top:10px;
	background-color:#a93a52;
	border:1px solid #fff;
	color:#fff;
	font-size:22px;
	cursor:pointer;
	    -moz-border-radius:17px;
-webkit-border-radius:17px;
}
.borderhome{
	border:1px solid #fff;
	padding:20px 40px;
	
	align:right;
margin:10px 0 20px auto;
	
}
.form_rezult{
		padding:15px 15px;
	margin-top:10px;
	background-color:dimgray;
	border:1px solid #fff;
	color:#fff;
	font-size:22px;
	cursor:pointer;
	    -moz-border-radius:17px;
-webkit-border-radius:17px;
}
.in{
	padding:0;
}
</style>
<body id="top" >

   <!-- home
   ================================================== -->
   <section id="home">
   	<div class="overlay"></div>
	<!-- this print infromtion -->
<?php
if (isset($_SESSION['username']) AND isset($_SESSION['username']))
{					
						echo"	
<div class='home-content-table'>	
		   <div class='home-content-tablecell'>
		   	<div class='row'>
		   		<div class='col-twelve'>		   			
	   <div class='more animate-intro'>
	<div class='informtion' dir='rtl'>
	";
include('print-infromtions.php');

echo" <a href='edit.php#edit' ><button class='buttoninf'> Modify your information </button></a>
</div>
	";
}
if (isset($_SESSION['user_m']) AND isset($_SESSION['user_m'])){					
						echo"	
<div class='home-content-table'>	
		   <div class='home-content-tablecell'>
		   	<div class='row'>
		   		<div class='col-twelve'>		   			
	   <div class='more animate-intro'>
	<div class='informtion' dir='rtl'>
	";
include('print-infromtions.php');

echo" <a href='edit_m.php#edit' ><button class='buttoninf'> Modify your information </button></a>
</div>
	";
}
?></div>
<!-- end of print infromtion -->
   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
	   <div class="more animate-intro">
	  
	         <!-- login
   ================================================== -->
	   <section id="login"> 	   			
 
   <?php


				
					if (!isset($_SESSION['username']) AND !isset($_SESSION['user_m'])){
						
						echo"
				<div class='home-content-table'>	
		        <div class='home-content-tablecell'>
		   	    <div class='row'>
		   		<div class='col-twelve'>
				
						  <div id='Login' class='bordermy' dir='rtl' >
						<a href='login.php'><button style='font-size:22px;' class='button'>  Entry as an applicant </button></a>
	<br/></br>
	<a href='loginm.php'> <button style='font-size:22px;' class='button'>  Entry as an institution </button></a>
	
	
	 <tr>
						 <td>
						 <label style='font-size:22px;'>
						 Are you a new user ?
						 </label>
						  </td>
                            <td colspan='2'><a href='#signup' ><button style='font-size:22px;' class='button' >Register a new user</button> </a> </td>

                        </tr>
						</div>
						</div></div></div></div>	
	";
					}
		
                       if (isset($_SESSION['username']) or isset($_SESSION['user_m'])){
                      echo"
						 <div class='more animate-intro'>
						
							<a class='smoothscroll button stroke ' href ='login/logout.php' > signout</a>
				  			
				  			</div>";
					}
					
?>	
</section>							</div>
		        <!--end of login
   ================================================== -->
			  				<h3 class='animate-intro'>welcome.</h3>
				  
				  			<div class='more animate-intro'>
				  				<a class='smoothscroll button stroke' href='#about'>
				  					Learn More
				  				</a>
								
				  			</div>
			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->

		
   </section> <!-- end home -->
<?php
session_start();
if (isset($_SESSION['username']) or isset($_SESSION['user_m'])){
require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM sq_m WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	?>
	<div class="borderw">
<label class="label"><p> Job Name : </p>
<p class="label"><?php echo $row['name_function']; ?></p>
	</label>
<label class="label"><p> Conditions for applying for the job :  </p>
	<p class="label"><?php echo $row['terms_function']; ?> </p>
	</label>
	</div> 
	<?php if (isset($_SESSION['username']) or isset($_SESSION['username'])){ ?>
	<div class="borderhome">
	<label class="label"><h3 style="color:green; "> Job testing  </h3>
	<?php
	if($row['fream'] == 'computer since'){
	include('fream1.php');
	}
		if($row['fream'] == 'Software engineering'){
	include('fream2.php');
	}
			if($row['fream'] == 'Secretarial'){
	include('fream3.php');
	} 
				if($row['fream'] == 'Business Administration'){
	include('fream4.php');
	} 
}
}


	?>
	</label></div>
	
	<?php
	
	// طباعة اختبارات الفريم ون
}
	if (isset($_SESSION['user_m']) and isset($_SESSION['user_m'])){
		
	require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM fream1 WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;
	?>
	<div class="borderhome">
	<h2 style="color:green; "> Answers</h2>
	<hr/>
	<label class="label" ><p style="color:red; ">Name: </p>
<?php echo $row->user_name;?>
</label>
<label class="label" > <p style="color:red;" > What are the programming languages for designing web pages and what is the difference between them:<br /></p>
<?php echo $row->answer_here1;?></label>
<label class="label"><p style="color:red; "> What does the next shortcut mean? HTM:  </p>
<?php echo $row->answer;?>
</label>
<p>
<strong style="color:red; ">What programming languages do you master?</strong>
<label class="label">
<?php echo $row->thingsliked;?></label>
<label class="label"><?php echo $row->thingsliked2;?></label>

<label class="label"><?php echo $row->thingsliked3;?></label>

<label class="label"><?php echo $row->thingsliked4;?></label>
<label class="label"><?php echo $row->thingsliked5;?></label> 

</P>
<label class="label"><p style="color:red; "> How to behave if you encounter a strange problem in the device or in the device of one of your fellow employees?<br />
</p><?php echo $row->answer_here2;?></label>
</label>
</div>
<!-- Accept and Rejection here -->

<form class="form_rezult" action="rezults.php?action=submit_rezult1" method="POST">
<strong> Please specify the primary result of the applicant .</strong>
<p><label>
<input type="hidden"  name="name"
value=<?php echo $row->user_name;?>><?echo $row->user_name;?></p>
</label></p>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<div>
<input type="radio" id="Accept" name="Accept" value="Accept" >
<label style="font-size:20px;" for="Accept">Accept</label>
</div>
<div>
<input type="radio" id="Rejection" name="Rejection" value="Rejection">
<label style="font-size:20px;" for="Rejection">Rejection</label>
</div>
<input class="button" type="submit" name="submit_rezult1"id="submit_rezult1" value="Send The Result"/>
</form>
<?
// طباعة المقبولين للمؤسسه 
$arrChartData[] = array();
	
	$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;

	
	$name = $row->user_name;
	if( $row->user_name == $name){
		if( $row->Accept == 'Accept'){
			$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;
			$name = $row->user_name;
			echo"<center>";
			echo"<p class='bordermy'>Accepted information you have <br/>";
			echo "<a href='print_inromtions_users.php?user_name={$name}'><br/>{$name}<br/></a></p>";
			echo"</center>";
}
		}
	}
}

} // end frem 1
//ادخال النتيجة لقاعدة البيانات 


}
											/* print the rezults for user 
					if (isset($_SESSION['username']) and isset($_SESSION['username'])){
		
	require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
	$user_name =  $_SESSION['username'];
	$id=$_POST['id_sq'];
$sql = "SELECT * FROM rezults WHERE  user_name='$user_name' and id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	?>
<div class="form_rezult" >
<label><b> Test Result </b>
<?php echo $row['Accept'];?>
<?php echo $row['Rejection'];?>
</label>
</div>
<?}}*/
// end of


	// طباعة اختبارات الفريم تو
	
	if (isset($_SESSION['user_m']) and isset($_SESSION['user_m'])){
		
	require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM fream2 WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	?>
	<div class="borderhome">
	<h2 style="color:green; "> Answers</h2>
	<hr/>
	<label class="label" ><p style="color:red; ">Name: </p>
<?php echo $row['user_name'];?>
</label>
<label class="label" > <p style="color:red;" >Describe the process that you use to write code from requirements to delivery ?<br /></p>
<?php echo $row['Answer_here_1'];?></label>
<label class="label"><p style="color:red; "> How can you design scalable applications? </p>
<?php echo $row['Answer'];?>
</label>
<p>
<strong style="color:red; ">What is the difference between Re-engineering and Reverse Engineering?</strong>
<label class="label">
<?php echo $row['Answer_here_2'];?></label>

</P>
<label class="label"><p style="color:red; "> Search algorithms you master<br />
</p><?php echo $row['thingsliked_1'];?>
<?php echo $row['thingsliked_2'];?>
</label>
</div>
<!-- Accept and Rejection here -->

<form class="form_rezult" action="rezults.php?action=submit_rezult2" method="POST">
<strong> Please specify the primary result of the applicant .</strong>
<label><input type = "hidden" name = "user_name"
value=<?php echo $row['user_name'];?>>
</label>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<div>
<input type="radio" id="Accept" name="Accept" value="Accept" >
<label style="font-size:20px;" for="Accept">Accept</label>
</div>
<div>
<input type="radio" id="Rejection" name="Rejection" value="Rejection">
<label style="font-size:20px;" for="Rejection">Rejection</label>
</div>
<input class="button" type="submit" name="submit_rezult1"id="submit_rezult1" value="Send The Result"/>
</form>
<?
// طباعة المقبولين للمؤسسه 
$arrChartData[] = array();
	
	$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;

	
	$name = $row->user_name;
	if( $row->user_name == $name){
		if( $row->Accept == 'Accept'){
			$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;
			$name = $row->user_name;
			echo"<center>";
			echo"<p class='bordermy'>Accepted information you have <br/>";
			echo "<a href='print_inromtions_users.php?user_name={$name}'><br/>{$name}<br/></a></p>";
			echo"</center>";
}
		}
	}
}
} // end frem 2

}

					
	// طباعة اختبارات الفريم ثري
	
	if (isset($_SESSION['user_m']) and isset($_SESSION['user_m'])){
		
	require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM fream3 WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	?>
	<div class="borderhome">
	<h2 style="color:green; "> Answers</h2>
	<hr/>
	<label class="label" ><p style="color:red; ">Name: </p>
<?php echo $row['user_name'];?>
</label>
<label class="label" > <p style="color:red;" >Why did you choose to work in the secretarial?<br /></p>
<?php echo $row['Answer_here1'];?></label>
<label class="label"><p style="color:red; "> Are you ready to accompany the manager on a business trip? </p>
<?php echo $row['Answer1'];?>
</label>
<p>
<strong style="color:red; ">What are the office software that you can master working on?</strong>
<label class="label">
<?php echo $row['office1'];?>
<?php echo $row['office2'];?>
<?php echo $row['office3'];?>
<?php echo $row['office4'];?>
</label>

</P>
<label class="label"><p style="color:red; "> What are the usually required tasks of the secretary / secretary to get the job?<br />
</p><?php echo $row['Answer_here2'];?>
</label>
</div>
<!-- Accept and Rejection here -->

<form class="form_rezult" action="rezults.php?action=submit_rezult3" method="POST">
<strong> Please specify the primary result of the applicant .</strong>
<p><label><input type="hidden"  name="name"
value=<?php echo $row['user_name'];?>><?echo $row['user_name'];?></p>
</label>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<div>
<input type="radio" id="Accept" name="Accept" value="Accept" >
<label style="font-size:20px;" for="Accept">Accept</label>
</div>
<div>
<input type="radio" id="Rejection" name="Rejection" value="Rejection">
<label style="font-size:20px;" for="Rejection">Rejection</label>
</div>
<input class="button" type="submit" name="submit_rezult1"id="submit_rezult1" value="Send The Result"/>
</form>
<?
// طباعة المقبولين للمؤسسه 
$arrChartData[] = array();
	
	$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;

	
	$name = $row->user_name;
	if( $row->user_name == $name){
		if( $row->Accept == 'Accept'){
			$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;
			$name = $row->user_name;
			echo"<center>";
			echo"<p class='bordermy'>Accepted information you have <br/>";
			echo "<a href='print_inromtions_users.php?user_name={$name}'><br/>{$name}<br/></a></p>";
			echo"</center>";
}
		}
	}
}
} // end frem 3

}



	// طباعة اختبارات الفريم فور
	
		
	if (isset($_SESSION['user_m']) and isset($_SESSION['user_m'])){
		
	require_once('login/connect.php');

$arrChartData[] = array();
//if(isset($_GET['id_sq'])){
$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM fream4 WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_assoc()) {
    $arrChartData[] = $row;
	?>
	<div class="borderhome">
	<h2 style="color:green; "> Answers</h2>
	<hr/>
	<label class="label" ><p style="color:red; ">Name: </p>
<?php echo $row['user_name'];?>
</label>

<label class="label" > <p style="color:red;" >What is management?<br /></p>
<?php echo $row['Answer_1here'];?></label>
<label class="label"><p style="color:red; "> What are the management functions? </p>
<?php echo $row['Answer_2here'];?>
</label>
<p>
<strong style="color:red; ">What is the difference between public administration and business administration?</strong>
<label class="label">
<?php echo $row['Answer_3here'];?>
</label>

</P>
<label class="label"><p style="color:red; "> What are your future goals?<br />
</p><?php echo $row['Answer_4here'];?>
</label>

</div>
<!-- Accept and Rejection here -->

<form class="form_rezult" action="rezults.php?action=submit_rezult4" method="POST">
<strong> Please specify the primary result of the applicant .</strong>
<p><label><input type="hidden"  name="name"
value=<?php echo $row['user_name'];?>><?echo $row['user_name'];?></p>
</label>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<div>
<input type="radio" id="Accept" name="Accept" value="Accept" />
<label style="font-size:20px;" for="Accept">Accept</label>
</div>
<div>
<input type="radio" id="Rejection" name="Rejection" value="Rejection"/>
<label style="font-size:20px;" for="Rejection">Rejection</label>
</div>
<input class="button" type="submit" name="submit_rezult1"id="submit_rezult1" value="Send The Result"/>
</form>

<?
// طباعة المقبولين للمؤسسه 
$arrChartData[] = array();
	
	$id=intval($_GET['id_sq']);
$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;

	
	$name = $row->user_name;
	if( $row->user_name == $name){
		if( $row->Accept == 'Accept'){
			$sql = "SELECT * FROM rezults WHERE id_sq='$id'";

$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($row = $res->fetch_object()) {
    $arrChartData[] = $row;
			$name = $row->user_name;
			echo"<center>";
			echo"<p class='bordermy'>Accepted information you have <br/>";
			echo "<a href='print_inromtions_users.php?user_name={$name}'><br/>{$name}<br/></a></p>";
			echo"</center>";
}
		}
	}
}
} // end frem 4
//ادخال النتيجة لقاعدة البيانات 

}
				


//ادخال البيانات للفريم ون

             require_once('login/database_connect.php');
    
                if ($_POST['submit']) {
      		

	 global $conn_link;

		$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$query = "INSERT INTO fream1 (user_name,email,id_sq,answer_here1,answer,thingsliked,thingsliked2,thingsliked3,thingsliked4,thingsliked5,answer_here2) VALUES (
	'" . mysqli_real_escape_string($conn_link, $_POST['name']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['email']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['id_sq']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['answer_here1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['answer']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked2']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked3']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked4']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked5']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['answer_here2']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		
		echo "The test was sent successfully ";
	}
	else
	{
		
		echo"error in query!";
		
	
				}
				}
				
				
// ادخال البيانات للفيرم تو 

             require_once('login/database_connect.php');
    
                if ($_POST['submit2']) {
      		

	 global $conn_link;

		$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$query = "INSERT INTO fream2 (user_name,email,id_sq,Answer_here_1,Answer,Answer_here_2,thingsliked_1,thingsliked_2) VALUES (
'$username','" . mysqli_real_escape_string($conn_link, $_POST['email']) . "',
'" . mysqli_real_escape_string($conn_link, $_POST['id_sq']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_here_1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_here_2']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked_1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['thingsliked_2']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		
		echo "The test was sent successfully";
	}
	else
	{
		
		echo"error in query!";
		
	
				}
				}
				
							
// ادخال البيانات للفيرم ثري

             require_once('login/database_connect.php');
    
                if ($_POST['submit3']) {
      		

	 global $conn_link;

		$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$query = "INSERT INTO fream3 (user_name,email,id_sq,Answer_here1,Answer1,office1,office2,office3,office4,Answer_here2) VALUES (
	'$username','" . mysqli_real_escape_string($conn_link, $_POST['email']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['id_sq']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_here1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['office1']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['office2']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['office3']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['office4']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_here2']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		
		echo "The test was sent successfully";
	}
	else
	{
		
		echo"error in query!";
		
	
				}
				}
										
// ادخال البيانات للفيرم فور

             require_once('login/database_connect.php');
    
                if ($_POST['submit4']) {
      		

	 global $conn_link;

		$username = $_SESSION['username'];
	$email = $_SESSION['email'];
	$query = "INSERT INTO fream4 (user_name,email,id_sq,Answer_1here,Answer_2here,Answer_3here,Answer_4here) VALUES (
	'$username','" . mysqli_real_escape_string($conn_link, $_POST['email']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['id_sq']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_1here']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_2here']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_3here']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Answer_4here']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		
		echo "The test was sent successfully";
	}
	else
	{
		
		echo"error in query!";
		
	
				}
				}
?>
   
    <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->

