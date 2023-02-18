
<?

//ادخال النتيجة لقاعدة البيانات 

             require_once('login/database_connect.php');
    
                if ($_POST['submit_rezult1']) {
      		

	 global $conn_link;
$id=intval($_GET['id_sq']);
		$user_name=$_POST['user_name'];
	
	$query = "INSERT INTO rezults (id_sq,user_name,Accept,Rejection) VALUES (
	'" . mysqli_real_escape_string($conn_link, $_POST['id_sq']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['name']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Accept']) . "',
	'" . mysqli_real_escape_string($conn_link, $_POST['Rejection']) . "'
	)";
	
	if (mysqli_query($conn_link,$query) === true)
	{
		
		echo " The result has been sent successfully ";
	}
	else
	{
		
		echo"error in query!";
		
	
				}
				}

