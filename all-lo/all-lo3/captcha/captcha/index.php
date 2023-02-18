<?php
session_start();
$errors ="";
if(isset($_POST['submit'])){
if(empty($_SESSION['6_letters_code'] ) ||
    strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
  {
   /*Note: the captcha code is compared case insensitively.
   if you want case sensitive match, update the check above to
   strcmp() */
    $errors = " رمز التحقق غير صحيح";
}else{
  header('Location: thank-you.html');
}
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP Secure Advanced Captcha.</title>
<link href="./styles.css" rel="stylesheet">
<script type='text/javascript'>
function refreshCaptcha(){
	var img = document.images['captchaimg'];
	img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
}
</script>

</head>
<body>
<?php
if(!empty($errors)){
echo "<p class='err'>".$errors."</p>";
}
?>
<div class="container">
<div id="header" class="header">
  <h1>PHP Secure Advanced Captcha</h1>
  <p> <a href="#">www.dev-techno.com</a></p>
</div>


<form method="POST" name="contact_form" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  class="dev-techno" >
     <img src="captcha_code_file.php?rand=<?php echo rand(); ?>" id='captchaimg' >
     <p> ادخل رمز التحقق هنا:</p>
     <input type="text" id="6_letters_code" name="6_letters_code"/><br/>
      <small>لا أستطيع قراءة الرمز؟ اضغط <a href='javascript: refreshCaptcha();'>هنا</a> للتحديث</small> <br/>
     <input type="submit" name="submit" value="ارسال" />
     

</form>
</div>
</body>
</html>