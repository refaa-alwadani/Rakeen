<?php
// هذا كود السجن 
header('Content-type: text/html; charset=utf-8');

session_start();

include("includes/header.php");
?>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <link rel="stylesheet" href="css/main.css">  
 <link rel="stylesheet" href="css/vendor.css">  

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
		   <br>
		    <img src="logo.gif"></img>
			
			   <h3 class='animate-intro'>welcome to our website .</h3> 
<div class='more animate-intro'>
				  				<a class='smoothscroll button stroke' href='#about'>
				  					Learn More
				  				</a>
	    			
		   	<div class="row">
		   		<div class="col-twelve">		   			
	  <div class="more animate-intro">
			  		
				
								
				  			</div>
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
</div>
<!-- this the bode sueqtion -->
		  
		   <?php 
		   //سجل الوظيفة بأي دي المؤسسة 
		   if (isset($_SESSION['user_m']) AND isset($_SESSION['user_m'])){
						
						echo"
						<div class='row'>
	<div class='home-content-table'>	
		   ";
		   $user_m=$_SESSION['user_m'];
		   include('squetions.php');
		  	echo"	
</div></div>";
					echo"
					<hr/>
						<div class='row'>
	<div class='home-content-table'>	
		   ";
		   include('lest_test.php');
		   		  	echo"	
</div></div>";
		   ?>
		  
		   <?
	echo"	
</div></div>";
		   }
		   
						?>
<?php

if (isset($_SESSION['username']) or isset($_SESSION['username'])){
	echo"
 <div class='row'>
	<div class='home-content-table'>
	<div class='bordermy2'>
	";
include('lest_test.php');
}
echo"</div></div></div>";

?>






<!-- end of the body sueqtion -- >



   <!-- about
   ================================================== -->
  
   <section id="about">

  	<div class="row about-wrap">
   		<div class="col-full">

   			<div class="about-profile-bg"></div>

				<div class="intro">
					<h3 class="animate-this">About Us</h3>
                    
	   			<p class="lead animate-this"><span>Rakeen</span> An online examination system for recruitment of staff is a web application 
                                    that establishes a network between the organization and applicants. The organization enters on the site the questions they want in the exam.</p>	
				</div>   

   		</div> <!-- end col-full  -->
   	</div> <!-- end about-wrap  -->

   </section> <!-- end about -->

   <!-- about
   ================================================== -->
      <!-- signup
   ================================================== -->
      <section id="services">

   	<div class="overlay"></div>
   	<div class="gradient-overlay"></div>
   	
   	<div class="row narrow section-intro with-bottom-sep animate-this">
   		<div class="col-full">
   			
   				<h3>Services</h3>
   			   <h1>What We Do.</h1>
   			
   			   <p class="lead">Online tests are very important and useful Because it breaks the distance barrier and a different geographical location, viewers from all over the world can access the system, giving examiners a good opportunity to identify potential high intelligence personnel. In our written exams we have multiple choice questions.</p>
   			
   	   </div> <!-- end col-full -->
   	</div> <!-- end row -->

   	<div class="row services-content">

   		<div class="services-list block-1-3 block-tab-full group">

	      	<div class="bgrid service-item animate-this">	

	      		<span class="icon"><i class="icon-paint-brush"></i></span>            

	            <div class="service-content">
	            	<h3 class="h05">Creation of exams </h3>

		            <p>Obviously, an exam will have to be created. Examiners can create exams online.
 The contents also have to be kept securely until the examination starts.
	         		</p>	         		
	         	</div> 	         	 

				</div> <!-- end bgrid -->

				<div class="bgrid service-item animate-this">	

					<span class="icon"><i class="icon-earth"></i></span>                          

	            <div class="service-content">	
	            	<h3 class="h05">Exam supervision</h3>  

		            <p>Applicants must be efficiently identified and screened to make sure they do not threaten test standards.
	         		</p>	         		
	            </div>	                          

			   </div> <!-- end bgrid -->

			   <div class="bgrid service-item animate-this">

			   	<span class="icon"><i class="icon-lego-block"></i></span>		            

	            <div class="service-content">
	            	<h3 class="h05">Marking of the exams</h3>

		            <p>Marking is the ultimate stage in any examination as it determines
 the success or failure of the candidate. It is the stage that
 dictates the next level of success and achievement.		</p>
	            </div> 	            	               

			   </div> <!-- end bgrid -->

	      </div> <!-- end services-list -->
   		
   	</div> <!-- end services-content -->   			

   </section> <!-- end services -->

 <!-- login
   ================================================== -->
	   <section id="login"> 	   			
		   			
	   <div class="more animate-intro">
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
	<a href='loginm.php#login'> <button style='font-size:22px;' class='button'>  Entry as an institution </button></a>
	
	
	 <tr>
						 <td>
						 <label style='font-size:22px;'>
						 Are you a new user ?
						 </label>
						  </td>
                            <td colspan='2'><a href='#signup' ><button style='font-size:22px;' class='button' >Register a new user</button> </a> </td>

                        </tr>
						</div></div></div>
							
	";
					}
		
                       if (isset($_SESSION['username']) or isset($_SESSION['user_m'])){
                      echo"
						 <div class='more animate-intro'>
							<div class='home-content-table'>
                            <div class='home-content-tablecell'>								
		   	                 <div class='row'>
		   		              <div class='col-twelve'>
							<a class='smoothscroll button stroke ' href ='login/logout.php' > signout</a>
				  			
				  			</div></div></div></div>";
					}
					
?>	
</section>							</div>
		        <!--end of login
   ================================================== -->
	 <?php


				
					if (!isset($_SESSION['username']) AND !isset($_SESSION['user_m'])){
						
						echo"
		<div class='home-content-table'>	
		   	    <div class='row'>
		   		<div class='col-twelve'>
   <div id='signup' class='bordermy' dir='rtl' >
   <h3 style='color:black; font-size:20px; '> new registration </h3>
		<br/>
	<a href='signup.php'><button class='button' style='font-size:22px;' >  Register as an applicant</button></a>
	<br/></br>
	  <a href='signupm.php'><button class='button' style='font-size:22px;'>   Register as an organization </button></a>
	</div>	
						
                        
                    

                
   </div></div></div></div></div>
					";}?>
   <!-- end of signup
   ================================================== -->
   
    <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->