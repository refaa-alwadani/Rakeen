<!--
ملف اضافة جدول الاختبارات
-->

<?php
// مستضيف قاعدة البيانات
$database['host'] = 'localhost';
// اسم المستخدم لقاعدة البيانات
$database['username'] = 'root';
// كلمة المرور لمستخدم قاعدة البيانات
$database['userpass'] = '12345678';
// اسم قاعدة البيانات
$database['name'] = 'root';

// كود عمل رابط الإتصال بقاعدة البيانات
$conn_link = mysqli_connect($database['host'],$database['username'],$database['userpass'],$database['name']) or die(mysqli_connect_error());

// أوامر SQL
$query = "CREATE TABLE sq_m  (
	id_sq	INT(10) UNSIGNED AUTO_INCREMENT,
	user_m varchar(100) NOT NULL,
	name_function varchar(100) NOT NULL,
	terms_function text NOT NULL,
	fream varchar(100) NOT NULL,
	UNIQUE (user_m),
	PRIMARY KEY (id_sq)
	)DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
	
// تنفيذ الإستعلام
if (mysqli_query($conn_link,$query) === true)
{
    echo '<h3>تم إنشاء الجدول بنجاح</h3>';
}
else
{
	echo '<h3>خطأ لم يتم إنشاء الجدول</h3>';
}
?>