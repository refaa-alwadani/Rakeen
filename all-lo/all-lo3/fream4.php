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
<!-- this fream4 -->

<h1>Business Administration</h1>
<p>Please answer all questions .</p>
<form method = "post" action ="print_test.php?id_sq=<?php echo $row['id_sq']; ?>?action=submit4">
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>
<p><label>Name:
<input type = "hidden" name = "name"
value = " <?php echo $_SESSION['username']; ?>"/><?php echo $_SESSION['username'];?>
</label></p>
<input type = "hidden" name = "email"
value = " <?php echo $_SESSION['email']; ?>"/>
<p><strong><label>What is management?<br />
<br/>
<textarea name = "Answer_1here"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
<strong/></label></p>



<p><label> What are the management functions?<br />
<br/>
<textarea name = "Answer_2here"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>

<p><label> What is the difference between public administration and business administration?<br />
<br/>
<textarea name = "Answer_3here"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>

<p><label> What are your future goals?<br />
<br/>
<textarea name = "Answer_4here"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>
<p>
<input class="buttonw" name="submit4" type = "submit" value ="submit"/>
<input class="buttonw" type ="reset" value ="clear"/>
</p>
</form>