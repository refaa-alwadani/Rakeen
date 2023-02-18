<?php
session_start();
?>
<style>
.buttonw{
	padding:15px 15px;
	margin-top:10px;
	background-color:#a93a52;
	border:1px solid #fff;
	color:#fff;
	font-size:22px;
	
	    -moz-border-radius:17px;
-webkit-border-radius:17px;
}
</style>
<h1>computer since </h1>
<p>Please fill out this form to help us improve our site.</p>
<form method = "post" action ="print_test.php?id_sq=<?php echo $row['id_sq']; ?>?action=submit">

<p><label>Name:
<input type = "hidden" name = "name"
value = " <?php echo $_SESSION['username']; ?>"/><?php echo $_SESSION['username'];?>
</label></p>
<input type = "hidden" name = "email"
value = " <?php echo $_SESSION['email']; ?>"/>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<!-- <textarea> create a multiline textbox -->
<p><label>What are the programming languages for designing web pages and what is the difference between them:<br />
<textarea name = "answer_here1"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>
<!-- <input type = "password"> inserts a -->
<!-- textbox whose display is masked with -->
<!-- asterisk characters -->
<p><label>What does the next shortcut mean? HTM:
<input name = "answer" id="answer" type ="text" size ="25" />
</label></p>
<p>
<strong>What programming languages do you master?</strong>
<label> Site design 
<input name = "thingsliked" type ="checkbox"
value = "Site design"/></label>
<label>C++
<input name ="thingsliked2" type = "checkbox"
value = "C++"/></label>
<label> JAVA 
<input name ="thingsliked3" type ="checkbox"
value ="JAVA"/></label>
<label>PYTHON 
<input name ="thingsliked4" type ="checkbox"
value = "PYTHON" /></label>
<label>C# 
<input name = " thingsliked5" type = "checkbox"
value = "C#"/></label>
</P>
<p><label> How to behave if you encounter a strange problem in the device or in the device of one of your fellow employees?<br />
<textarea name = "answer_here2"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>
<p>
<input class="buttonw" type = "submit" name="submit" value ="submit"/>
<input class="buttonw" type ="reset" value ="clear"/>
</p>
</form>

