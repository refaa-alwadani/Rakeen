<!--
ملف اضافة جدول الفريم ون
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
$query = "CREATE TABLE fream1  (
	id_f1 INT(10) UNSIGNED AUTO_INCREMENT,
	user_name varchar(50) NOT NULL,
	id_sq INT(10) NOT NULL,
	answer_here1 text NOT NULL,
	answer varchar(100) NOT NULL,
	thingsliked	varchar(20) NOT NULL,
	thingsliked1 varchar(20) NOT NULL,
	thingsliked2 varchar(20) NOT NULL,
	thingsliked3 varchar(20) NOT NULL,
	thingsliked4 varchar(20) NOT NULL,
	thingsliked5 varchar(20) NOT NULL,
	answer_here2 text NOT NULL,
	PRIMARY KEY (id_f1)
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