<?php
session_start();

?>
<script src="js/jquery-2.1.3.min.js"></script>
<style>
.inp{
	font-size:20px;	
	text-align:center;
}
.divt{
	border:1px solid #a5a5a5;
	width:400px;
	padding:20px 30px 30px;
	margin-bottom:30px;
	font-size:20px;
	-moz-border-radius:17px;
    -webkit-border-radius:17px;
}

</style>
<div class="squetion">
<center>
<form  action="index.php?action=submit" method="POST">
<label>
<input class="inp" placeholder="Name function . ." type="text" name="name_function" id="name_function" />
</label>
<label>
<textarea class="inp" name="terms_function" id="terms_function" placeholder="Conditions for applying for the job. ."></textarea>
</label>
<label class="inp"> Choose the test template
<select name="fream" id="fream">
<option> </option>
<option> computer since </option>
<option> Software engineering </option>
<option> Secretarial </option>
<option> Business Administration </option>
</select>
 <div class="bo-img">
<a href="https://i.imgur.com/q0knwUf.jpg">
  <img src="first.jpeg" class="img" width="150" height="150" ></a>


<a href="https://i.imgur.com/1o9VIcS.jpg">
  <img src="sec.jpeg" class="img" width="150" height="150" ></a>

<a href="https://i.imgur.com/DayfNBA.jpg">
  <img src="third.jpeg" class="img" width="150" height="150" ></a>

<a href="https://i.imgur.com/YyFRfKt.jpg">
  <img src="forth.jpeg" class="img" width="150" height="150" ></a>

</div>
<br/>
<input style="color:green; font-size:20px;" type='submit' class="button" name='submit' value='Send'/>
</form>


<?php
$name_function=$_POST['name_function'];
$terms_function=$_POST['terms_function'];
$fream=$_POST['fream'];
                // إستدعاء ملف الإتصال بقاعدة البيانات
				
                require_once('login/database_connect.php');

                if (isset($_GET['action']) and $_GET['action'] == 'submit') {
					if(isset($name_function) and ($terms_function)){
						signUp();
					}
				else{
					echo"<p style='color:#ac1818; font-size:20px;'> There's a mistake !</p>";} 				
				}
function signUp() {
	 global $conn_link;
		$user_m = $_SESSION['user_m'];
	$query = "INSERT INTO sq_m (user_m,name_function,terms_function,fream) VALUES (
	'$user_m',
	'" . mysqli_real_escape_string($conn_link, $_POST['name_function']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['terms_function']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['fream']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		echo "The form was submitted successfully";
		
		return true;
	}
	else
	{
		
		echo"error in query!";
		return false;
	}

}

?>

 </center>
</div>

