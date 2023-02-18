<?php
// هذا كود السجن 
header('Content-type: text/html; charset=utf-8');

session_start();

include("includes/header.php");
?>

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
			  				
   <div id="Login" class="bordermy" dir="rtl" >
   
		
	<a href="signup.php"><button class="button" style="font-size:22px;" >  التسجيل كمتقدم</button></a>
	<br/></br>
	  <a href="signupm.php"><button class="button" style="font-size:22px;">   التسجيل كمؤسسة </button></a>
	</div>	
						
                        
                    

                
   </div>
				  			
			  				<h3 class="animate-intro">welcome.</h3>
				  

				  			<div class="more animate-intro">
				  				<a class="smoothscroll button stroke" href="#about">
				  					Learn More
				  				</a>
								
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

     <!-- this footer -->
<?php include("includes/footer.php");?>
<!-- end of footer -->