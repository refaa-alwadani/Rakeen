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
<!-- this fream3 -->

<h1>Secretarial</h1>
<p>Please answer all questions .</p>
<form method = "post" action ="print_test.php?id_sq=<?php echo $row['id_sq']; ?>?action=submit3">
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<p><label>Name:
<input type = "hidden" name = "name"
value = " <?php echo $_SESSION['username']; ?>"/><?php echo $_SESSION['username'];?>
</label></p>
<input type = "hidden" name = "email"
value = " <?php echo $_SESSION['email']; ?>"/>
<p><strong><label>Why did you choose to work in the secretarial?<br/>
<br/>
<textarea name = "Answer_here1"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
<strong/></label></p>
<p>
<strong>Are you ready to accompany the manager on a business trip?
<input name = "Answer1" type ="text" size ="25" />
<strong/></label></p>

<p>

<strong>What are the office software that you can master working on?</strong>
<label> Word

<input name = "office1" type ="checkbox"
value = "Word"/></label>
<label>Excel
<input name ="office2" type = "checkbox"
value = "Excel"/></label>
<label> Outlook
<input name ="office3" type ="checkbox"
value ="Outlook"/></label>
<label>Pawerpoint
<input name ="office4" type ="checkbox"
value = "Pawerpoint" /></label>
</P>


<p><label> What are the usually required tasks of the secretary / secretary to get the job?<br />
<br/>
<textarea name = "Answer_here2"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>
<p>
<input class="buttonw" name="submit3" type = "submit" value ="إرسال"/>
<input class="buttonw" type ="reset" value ="clear"/>
</p>
</form>
