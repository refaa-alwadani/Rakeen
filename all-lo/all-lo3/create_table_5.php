<!--
ملف اضافة جدول الفريم تو
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
$query = "CREATE TABLE fream2  (
	id_f2 INT(10) UNSIGNED AUTO_INCREMENT,
	user_name varchar(50) NOT NULL,
	id_sq INT(10) NOT NULL,
	answer_here1 text NOT NULL,
	Answer varchar(100) NOT NULL,
	Answer_here_2 text NOT NULL,
	thingsliked_1 varchar(20) NOT NULL,
	thingsliked_2 varchar(20) NOT NULL,
	PRIMARY KEY (id_f2)
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