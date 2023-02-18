<?php

header('Content-Type: text/html; charset=utf-8');

session_start();

if (isset($_SESSION['username']) and !isset($_SESSION['user_m'])){



    header("location:index.php");

    exit();

}

include("includes/header.php");
?>

   <link rel="stylesheet" href="css/main.css">  
   <!-- سكربت كود التحقق -->
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>
<body id="top" >

   <div id="login">
   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  				
                       <div class="bordermy" align="center" dir="ltr" >

<form action="loginm.php?action=submit" method="POST">

                           <label>
                           <input style="font-size:20px;" type="text" name="user_m" placeholder="user name . . "></label>
                           <label>
                           <input style="font-size:20px;" type="password" name="pass_m" placeholder="password . ." > <br>
<!-- كود التحقق -->
<label>

<div class="container">
 <img src="captcha/captcha/captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' >
     <input style="font-size:20px;"type="text" id="6_letters_code" name="6_letters_code" placeholder="Enter the image code." /><br/>
      <small>I cant reed the code click  <a href='javascript: refreshCaptcha();'>here</a> To update</small> <br/>
	  </div>
	 </label>
                            <label colspan="2"><input style="font-size:22px;" class="button" type="submit" name="submit" value="Login "></label>

                </form>		
						
						 <label style="font-size:22px;">
						Are you a new user?
						 </label>
						
                            <p colspan="2"><a href="#signup" ><button style="font-size:22px;" class="button" >Register a new user</button></a>  </p>

 <?php

                if (isset($_GET['action']) and $_GET['action'] == 'submit') {

                    if (isset($_POST['user_m']) and $_POST['user_m'] != null and isset($_POST['pass_m']) and $_POST['pass_m'] != null) {
					
						// إستدعاء ملف الإتصال بقاعدة البيانات
						
						require_once('login/database_connect.php');
						
                        $username = preg_replace('/[^a-zA-Z0-9._-]/', '', $_POST['user_m']);

                        $password = preg_replace('/[^a-zA-Z0-9]/', '', $_POST['pass_m']);
// التحقق
if(empty($_SESSION['6_letters_code'] ) ||
    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) == 0)
  {
   /*Note: the captcha code is compared case insensitively.
   if you want case sensitive match, update the check above to
   strcmp() */
       echo "<h3 style='color:#F33;'>Please type the characters correctly</h3>";
                        if (login($username, $password)) {

                            echo "<h3 style='color:#0F0;'> Welcome to sign in $username<h3>";

                            $_SESSION['user_m'] = $username;

                            echo "<h5 style='color:#0F0;'> Switching to the home page ...<h5>";

                            echo '

                            <script type="text/javascript">

                                setTimeout(function () {

                                   window.location.href = "index.php";

                                }, 1000);

                            </script>

                            ';

                        } else {

                            echo "<h3 style='color:#F33;'>Sign-in process not tried again <h3>";

                        }
}//3
					else {        
  echo "<p class='err'>Invalid verification code </p>";   
                    }
                    } else {

                        echo "<h3 style='color:#F33;'>Please fill in all fields</h3>";

                    }

                }

                ?>
				
                
   </div> </div> </div> </div> </div></div>
         <!-- signup
   ================================================== -->
		<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
			  				
   <div id="signup" class="bordermy" dir="rtl" >
   
		
	<a href="signup.php"><button class="button" style="font-size:22px;" >  Register as an applicant</button></a>
	<br/></br>
	  <a href="signupm.php"><button class="button" style="font-size:22px;">  Register as an institution </button></a>
	</div>	
						
                        
                    

                
   </div></div></div></div>
   <!-- end of signup
   ================================================== -->
   <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->

<?php



function login($username, $password) {

	global $conn_link;
	// عدلنا هذا الكود عشان الأمان 
	//user_pass='" . sha1($_POST['password']) . "'
	
	$query = "SELECT * FROM rootm   WHERE user_m='$username' and pass_m='" . sha1($_POST['pass_m']) . "'";
	
	if ($result = mysqli_query($conn_link,$query))
	{
		if(mysqli_num_rows($result) == '1')
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	else
	{
		return false;
	}
}
?>