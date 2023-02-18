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
<!-- this fream2 -->

<h1>Software engineering</h1>
<p>Please answer all questions .</p>
<p>Please fill out this form to help us improve our site.</p>
<form method = "post" action ="print_test.php?id_sq=<?php echo $row['id_sq']; ?>?action=submit2">
<p><label>Name:
<input type = "hidden" name = "name"
value = " <?php echo $_SESSION['username']; ?>"/><?php echo $_SESSION['username'];?>
</label></p>
<input type = "hidden" name = "email"
value = " <?php echo $_SESSION['email']; ?>"/>
<input type = "hidden" name = "id_sq"
value = " <?php echo $id; ?>"/>

<p><strong><label>Describe the process that you use to write code from requirements to delivery ?<br />
<br/>
<textarea name = "Answer_here_1"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
<strong/></label></p>

<p>
<strong>How can you design scalable applications?
<input name = "Answer" type ="text" size ="25" />
<strong/></label></p>



<p><label> What is the difference between Re-engineering and Reverse Engineering?<br />
<br/>
<textarea name = "Answer_here_2"
rows ="4" cols ="36" placeholder="Answer here ."></textarea>
</label></p>

<p>
<strong>Search algorithms you master</strong>
<label> (BFS) Breadth First Search  
<input name = "thingsliked_1" type ="checkbox"
value = "(BFS) Breadth First Search "/></label>
<label>(DFS) Depth First Search
<input name ="thingsliked_2" type = "checkbox"
value = "(DFS) Depth First Search"/></label>
</P>

<p>
<input class="buttonw" name="submit2" type = "submit" value ="إرسال"/>
<input class="buttonw" type ="reset" value ="clear"/>
</p>
</form>
