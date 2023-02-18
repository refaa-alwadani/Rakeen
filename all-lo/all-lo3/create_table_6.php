<!--
ملف اضافة جدول الفريم ثري
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
$query = "CREATE TABLE fream3  (
	id_f3 INT(10) UNSIGNED AUTO_INCREMENT,
	user_name varchar(50) NOT NULL,
	id_sq INT(10) NOT NULL,
	Answer_here1 text NOT NULL,
	Answer1 varchar(100) NOT NULL,
	office1 varchar(20) NOT NULL,
	office2 varchar(20) NOT NULL,
	office3 varchar(20) NOT NULL,
	office4 varchar(20) NOT NULL,
	Answer_here2 text NOT NULL,
	PRIMARY KEY (id_f3)
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