<?php
 
header('Content-Type: text/html; charset=utf-8');

session_start();

if (!isset($_SESSION['username']) AND !isset($_SESSION['username'])){



    header("location:index.php");

    exit();

}
include("includes/header.php");
?>
	<script src="js/jquery-2.1.3.min.js"></script>
	
   <link rel="stylesheet" href="css/main.css">  
<body id="top" >
   <!-- home
   ================================================== -->

   <section id="home">

   	<div class="overlay"></div>

   	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
                                 

			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->


		<div class="scrolldown">
			<a href="#about" class="scroll-icon smoothscroll">		
		   	Scroll Down		   	
		   	<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
			</a>
		</div>			
   
   </section> <!-- end home -->


   <!-- about
   ================================================== -->
  
   <section id="about">

   	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About Us</h3>
                    
	   			<p class="lead animate-this"><span>Rakean</span> An online examination system for recruitment of staff is a web application 
                                    that establishes a network between the organization and applicants. The organization enters on the site the questions they want in the exam.</p>	
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->


   <!--end of about
   ================================================== -->
            <!-- signup
   ================================================== -->
   <?php
$mysqli = new mysqli("localhost", "root", "12345678", "root");
$arrChartData[] = array();
$user = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE user_name = '$user'";
$res = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($send = $res->fetch_assoc()) {
    $arrChartData[] = $send;
   	 
   ?>
   <div id="edit">
 	<div class="home-content-table">	
		   <div class="home-content-tablecell">
		   	<div class="row">
		   		<div class="col-twelve">		   			
 <div class="bordermy"  >
            
<b style="color:black; font-size:20px; ">UPDATE INFO </b>
(<?php echo  $_SESSION['username']; ?>)
                <form action="edit.php?action=submit" method="POST">

                    <table >
					   <tr >
                            <th><label style="font-size:18px;"> The name is triple : </label></th>
                            <th><input style=" margin:1px 1px;" type="text" name="user3" value="<?php echo isset($_POST['user3']) ? $_POST['user3'] : ''; ?>"></th>
                        </tr>
					 
						 <tr >
                            <th><label style="font-size:18px;"> Educational level : </label></th>
                            <th>
							<select style=" margin:1px 1px;" name="level" id="level" value="<?php echo isset($_POST['level']) ? $_POST['level'] : ''; ?>">
							<option > secondary </option>
							<option> Bachelor's </option>
							<option> Diploma </option>
							</th>
							
                        </tr>
						
						
						
						   <tr id="sp" >
                            <th ><label style="font-size:18px"> Specialization : </label></th>
							
                            <th>
							
							<select style=" margin:1px 1px; " id="spec" name="spec" value="<?php echo isset($_POST['spec']) ? $_POST['spec'] : ''; ?>">
							<option> </option>
							<option>Computer Science </option>
							<option > Information Systems </option>
							<option > Software engineering </option>
							<option > Mathematics </option>
							<option > Sciences </option>
							<option >Library Administration </option>
							<option> Natural Sciences </option>
							<option> literary </option>
							</select>
							</th>
                        </tr>
						   <tr >
                            <th><label style="font-size:15px;"> Date of Birth : </label></th>
                            <th><input  style=" margin:1px 1px;" type="date"  name="date_of_birth" value="<?php echo isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : ''; ?>"></th>
                        </tr>
						   <tr >
                            <th><label style="font-size:15px;"> Place of residence : </label></th>
                            <th><select style=" margin:1px 1px;" name="city" value="<?php echo isset($_POST['city']) ? $_POST['city'] : ''; ?>">
							<option > Riyadh region </option><option > Northern border region </option>
							<option >Makkah region</option><option > Al-Jouf Region</option>
							<option >Medina area</option><option >Jazan region</option>
							<option >Qassim region </option><option > Albaha region </option>
							<option >Tubok region</option>
							<option >Eastern Province</option>
							<option >Aseer region</option>
							<option >Najran region</option>
							</select>
							</th>
                        </tr>
						   <tr >
                            <th><label style="font-size:15px;"> Phone number </label></th>
                            <th><input style=" margin:1px 1px;" type="number" placeholder="123-4567-8901" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  name="number" value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>"></th>
                        </tr>
						   <tr >
                            <th><label style="font-size:15px;">  University that graduated from : </label></th>
                            <th><input style=" margin:1px 1px;" type="text" id="university" name="university" value="<?php echo isset($_POST['university']) ? $_POST['university'] : ''; ?>"></th>
                        </tr>
						   <tr >
                            <th><label style="font-size:15px;">the average : </label></th>
                            <th><input style=" margin:1px 1px;" type="text" name="rate" value="<?php echo isset($_POST['rate']) ? $_POST['rate'] : ''; ?>"></th>
                        </tr>
					<!-- ---------------------------- -->
                        <tr >
                            <th><label style="font-size:15px;"> User name: </label></th>
                            <th><input style=" margin:1px 1px;" type="text" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>"></th>
                        </tr>
                        <tr >
                            <th valign="top"><label style="font-size:20px;">Email  : </label>
                            <th valign="top"><input style=" margin:0px 0px " type="text" name="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : ''; ?>"><br>
                        </tr>
                        <tr>
                            <th valign="top"><label style="font-size:15px; padding:0px 0px; margin:0px 0px;">Verify your e-mail  :</label>
                            <th valign="top"><input style=" margin:1px 1px;" type="text" name="email2" value="<?php echo isset($_POST['email2']) ? $_POST['email2'] : ''; ?>"><br>
                        </tr>
                        <tr>
                            <th valign="top"><label style="font-size:15px;"> Password : </label>
                            <th valign="top"><input style=" margin:1px 1px;" type="password" name="password"><br>
                        </tr>
                        <tr>
                            <th valign="top"><label style="font-size:15px;">Verify your password:</label>
                            <th><input style=" margin:1px 1px;" type="password" name="password2"><br>
                        </tr>
                           <tr>
                            <th valign="top"><label> 4+1 = </label>
                            <th ><input style="margin:1px 1px;" type="text" name="b" id="b"><br>
                        </tr>
                        <tr>
                            <th colspan="2"><input class="button" style="margin:1px 1px; font-size:22px;" type="submit" name="submit" value=" Sign Up  "></th>
                        </tr>
						</div>
				  
<?php
}// end of while
                // إستدعاء ملف الإتصال بقاعدة البيانات
				
                require_once('login/database_connect.php');



                // متغير لحفظ نصوص الأخطاء

                $error;

$user3 = $_POST['user3'];

                if (isset($_GET['action']) and $_GET['action'] == 'submit') {
// التحقق من الاجابة
if($user3 !== ""){
if(qustion_R()){
                      if (username_v() and email_v() and pass_v()) {
						 if (!checkemail()) {
                        if (checkUser()) {

                            echo ("<h4 style='color:#FF0;'>This user already exists!</h4>");

                        } else {

                            signUp();

                            echo ("<h4 style='color:#fff;'>successfully registered!</h4>");

                        }
 } else {

                        echo "<h4 style='color:#F53;'> This email is already registered!</h4>";

                    }
                    } else {

                        echo "<h4 style='color:#F53;'>$error</h4>";

                    }

                } else {
                    echo "<h4 style='color:#F53;'>$error</h4>";
					
                 } 
				}else{
					 echo "<h4 style='color:#F53;'>Triple name must be registered! </h4>";
				}
				}
                ?>

                    </table>

                </form>
                                                        
</div>
			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->
          <!--of end signup
   ================================================== --> 
   <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->

<!-- هنا أكواد الدوال -->



<?php

// دالة التحقق من إجابة السؤال
function qustion_R(){
$cc=$_POST['b'];

	global $error;
	 if (isset($_POST['b']) and $_POST['b'] != null) {
	if ($cc == 5){
		return true;
	}else{
		 $error = "Answer the question wrong";
		 return false;
	}
}
}

// دالة التحقق من اسم المستخدم

function username_v() {

    global $error;



    if (isset($_POST['username']) and $_POST['username'] != null) {

        if (preg_match('/^([a-zA-Z0-9._-]){5,30}$/', $_POST['username'])) {

            return true;

        } else {

            $error = "Username must be uppercase or lowercase letters, numbers or special signs. And _ and - or just a mixture of them with a length of 6 to 30 items";

            return false;

        }

    } else {

        $error = "Please fill in the Username field";

        return false;

    }

}



// دالة التحقق من كلمة المرور

function pass_v() {

    global $error;



    if ((isset($_POST['password']) and $_POST['password'] != null)

            and (isset($_POST['password2']) and $_POST['password2'] != null)) {

        if (preg_match('/^([a-zA-Z0-9]){6,20}$/', $_POST['password'])) {

            if ($_POST['password'] != $_POST['password2']) {

                $error = "Password does not match";

                return false;

            } else {

                return true;

            }

        } else {

            $error = "Please type a password that contains uppercase or lowercase English letters, numbers, or a mixture of them only and that the password be between 6 and 20 items in length";

            return false;

        }

    } else {

        $error = "Please fill in the password fields";

        return false;

    }

}



// دالة التحقق من البريد الإلكتروني

function email_v() {

    global $error;



    if ((isset($_POST['email']) and $_POST['email'] != null)

            and (isset($_POST['email2']) and $_POST['email2'] != null)) {

        if (preg_match('/^([a-zA-Z])([a-zA-Z0-9._-]){2,30}@([a-zA-Z0-9.-])+\.([a-zA-Z0-9]){2,5}$/', $_POST['email'])) {

            if ($_POST['email'] != $_POST['email2']) {

                $error = "Email does not match";

                return false;

            } else {

                return true;

            }

        } else {

            $error = "Please write a valid email";

            return false;

        }

    } else {

        $error = "Please fill in the email fields";

        return false;

    }

}



// دالة التحقق من وجود مستخدم مُسجَل مسبقاً

function checkUser() {

	global $conn_link;
	
	$query = "SELECT * FROM users WHERE user_name='{$_POST['username']}'";
	
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
function checkemail() {

	global $conn_link;
	
	$query = "SELECT * FROM users WHERE user_email='{$_POST['email']}'";
	
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


$user = $_SESSION['username'];


function signUp() {

    global $conn_link;
	
$mysqli = new mysqli("localhost", "root", "12345678", "root");
$arrChartData[] = array();
$user = $_SESSION['username'];
$sql = "SELECT * FROM users WHERE user_name = '$user'";
$res2 = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($send2 = $res2->fetch_assoc()) {
    $arrChartData[] = $send2;
	
	$query = "UPDATE users SET user3 ='" . mysqli_real_escape_string($conn_link, $_POST['user3']) . "',
	spec ='" . mysqli_real_escape_string($conn_link, $_POST['spec']) . "',
	level ='" . mysqli_real_escape_string($conn_link, $_POST['level']) . "',
	spec_th ='" . mysqli_real_escape_string($conn_link, $_POST['spec_th']) . "',
	date_of_birth ='" . mysqli_real_escape_string($conn_link, $_POST['date_of_birth']) . "',
	city ='" . mysqli_real_escape_string($conn_link, $_POST['city']) . "',
	number ='" . mysqli_real_escape_string($conn_link, $_POST['number']) . "',
	university ='" . mysqli_real_escape_string($conn_link, $_POST['university']) . "',
	rate ='" . mysqli_real_escape_string($conn_link, $_POST['rate']) . "',
	user_pass ='" . sha1($_POST['password']) . "',
user_email ='" . mysqli_real_escape_string($conn_link, $_POST['email']) . "'
	WHERE user_name = '$user'";
	if (mysqli_query($conn_link,$query) === true)
	{
		return true;
	}
	else
	{
		return false;
	}

}
}


?>