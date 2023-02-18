<!--
ملف اضافة جدول المتقدمين
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
$query = "CREATE TABLE users  (
	user_id INT(10) UNSIGNED AUTO_INCREMENT,
	user3 varchar(100) NOT NULL,
	level varchar(100) NOT NULL,
	spec varchar(100) NOT NULL,
	date_of_birth varchar(100) NOT NULL,
	city varchar(100) NOT NULL,
	number varchar(100) NOT NULL,
	university varchar(100) NOT NULL,
	rate varchar(100) NOT NULL,
	user_name varchar(100) NOT NULL,
	user_pass varchar(100) NOT NULL,
	user_email varchar(100) NOT NULL,
	UNIQUE (user_name),
	PRIMARY KEY (user_id)
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