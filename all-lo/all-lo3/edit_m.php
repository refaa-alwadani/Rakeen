<?php
 
header('Content-Type: text/html; charset=utf-8');

session_start();

if (!isset($_SESSION['user_m']) AND !isset($_SESSION['user_m'])){



    header("location:index.php");

    exit();

}
include("includes/header.php");
?>
 
   <link rel="stylesheet" href="css/main.css">  

<body id="top" >

	<!-- header 
   ================================================== -->
   <header> 
<!--
   	<div class="header-logo">
	      <a href="index.html">Rakean</a>
	   </div> 
-->



	</header> <!-- end header -->  


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


   <!-- about
   ================================================== -->
    <?php
$mysqli = new mysqli("localhost", "root", "12345678", "root");
$arrChartData[] = array();
$user = $_SESSION['user_m'];
$sql = "SELECT * FROM rootm WHERE user_m = '$user'";
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
            
<b style="color:black; font-size:20px; ">   UPDATE </b>
(<?php echo $_SESSION['user_m']; ?>)
                <form action="edit_m.php?action=submit" method="POST">

                    <table style=" padding:0px 0px; margin:0px 0px;">
                         <tr>
                             <th><label style="font-size:15px;"> Institution name : </label></th>
                            <th><input style=" margin:0px 0px " type="text" name="name_company" value="<?php echo isset($_POST['name_company']) ? $_POST['name_company'] : ''; ?>"></th>
                        </tr>
						<tr>
                            <th><label style="font-size:15px;"> Career field : </label></th>
                            <th><input style=" margin:0px 0px " type="text" name="field" value="<?php echo isset($_POST['field']) ? $_POST['field'] : ''; ?>"></th>
                        </tr>
						<tr>
                            <th><label style="font-size:15px;"> Institution headquarters : </label></th>
                            <th><select style=" margin:0px 0px " type="text" name="city_m" value="<?php echo isset($_POST['city_m']) ? $_POST['city_m'] : ''; ?>">
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
							</th>
                         </tr>
						 <tr>
                            <th><label style="font-size:15px;">Its branches, if any: </label></th>
                            <th><input style=" margin:0px 0px " type="text" name="city_m2" value="<?php echo isset($_POST['city_m2']) ? $_POST['city_m2'] : ''; ?>"></th>
                         </tr>
						<!-- -------------------- -->
                        <tr>
                            <th><label style="font-size:15px;"> User name : </label></th>
                            <th><input style=" margin:0px 0px " type="text" name="user_m" value="<?php echo isset($_POST['user_m']) ? $_POST['user_m'] : ''; ?>"></th>
                        </tr>
                        <tr>
                           <th><label style="font-size:15px;">Email : </label>
                            <th><input style=" margin:0px 0px " type="text" name="email_m" value="<?php echo isset($_POST['email_m']) ? $_POST['email_m'] : ''; ?>"><br>
                        </tr>
                        <tr>
                            <th><label style="font-size:15px;">Verify your e-mail :</label>
                            <th><input style=" margin:0px 0px " type="text" name="email_m2" value="<?php echo isset($_POST['email_m2']) ? $_POST['email_m2'] : ''; ?>"><br>
                        </tr>
                        <tr>
                            <th><label style="font-size:15px;"> Password : </label>
                            <th><input style=" margin:0px 0px "type="password" name="pass_m"><br>
                        </tr>
                        <tr>
                            <th><label style="font-size:15px;">Verify your password :</label>
                            <th><input  style=" margin:0px 0px " type="password" name="pass_m2"><br>
                        </tr>
 <tr>
                            <th><label > 4+1 </label>
                            <th><input style=" margin:0px 0px " type="text" name="b" id="b"><br>
                        </tr>
                        <tr>
                            <th colspan="2"><input class="button" style=" margin:0px 0px " style="font-size:22px;" type="submit" name="submit" value=" sgin up "></th>
                        </tr>

                   
 <?php

                // إستدعاء ملف الإتصال بقاعدة البيانات
				
                require_once('login/database_connect.php');



                // متغير لحفظ نصوص الأخطاء

                $error;



                if (isset($_GET['action']) and $_GET['action'] == 'submit') {
// التحقق من الاجابة
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
				}
                ?>
       </table>
                </form>
				  
                                                  
</div>
			  		</div> <!-- end col-twelve --> 
		   	</div> <!-- end row --> 
		   </div> <!-- end home-content-tablecell --> 		   
		</div> <!-- end home-content-table -->


     <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->

<?php

// دالة التحقق من إجابة السؤال
function qustion_R(){
$cc=$_POST['b'];

	global $error;
	 if (isset($_POST['b']) and $_POST['b'] != null) {
	if ($cc == 5){
		return true;
	}else{
		 $error = "إجابة السؤال خطأ";
		 return false;
	}
}
}

// دالة التحقق من اسم المستخدم

function username_v() {

    global $error;



    if (isset($_POST['user_m']) and $_POST['user_m'] != null) {

        if (preg_match('/^([a-zA-Z0-9._-]){5,30}$/', $_POST['user_m'])) {

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



    if ((isset($_POST['pass_m']) and $_POST['pass_m'] != null)

            and (isset($_POST['pass_m2']) and $_POST['pass_m2'] != null)) {

        if (preg_match('/^([a-zA-Z0-9]){6,20}$/', $_POST['pass_m'])) {

            if ($_POST['pass_m'] != $_POST['pass_m2']) {

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



    if ((isset($_POST['email_m']) and $_POST['email_m'] != null)

            and (isset($_POST['email_m2']) and $_POST['email_m2'] != null)) {

        if (preg_match('/^([a-zA-Z])([a-zA-Z0-9._-]){2,30}@([a-zA-Z0-9.-])+\.([a-zA-Z0-9]){2,5}$/', $_POST['email_m'])) {

            if ($_POST['email_m'] != $_POST['email_m2']) {

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
	
	$query = "SELECT * FROM rootm WHERE user_m='{$_POST['user_m']}'";
	
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
	
	$query = "SELECT * FROM rootm WHERE email_m='{$_POST['email_m']}'";
	
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

// دالة تسجيل مستخدم جديد

function signUp() {

    global $conn_link;
	
$mysqli = new mysqli("localhost", "root", "12345678", "flip");
$arrChartData[] = array();
$user = $_SESSION['user_m'];
$sql = "SELECT * FROM rootm WHERE user_m = '$user'";
$res2 = $mysqli->query($sql) or trigger_error($mysqli->error."[$sql]");
while($send2 = $res2->fetch_assoc()) {
    $arrChartData[] = $send2;
	
	$query = "UPDATE rootm SET name_company ='" . mysqli_real_escape_string($conn_link, $_POST['name_company']) . "',
	field ='" . mysqli_real_escape_string($conn_link, $_POST['field']) . "',
	city_m ='" . mysqli_real_escape_string($conn_link, $_POST['city_m']) . "',
	city_m2 ='" . mysqli_real_escape_string($conn_link, $_POST['city_m2']) . "',
	email_m ='" . mysqli_real_escape_string($conn_link, $_POST['email_m']) . "',
	pass_m ='" . sha1($_POST['pass_m']) . "'
	WHERE user_m = '$user'";
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