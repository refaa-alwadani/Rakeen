<?php

header('Content-Type: text/html; charset=utf-8');

session_start();

if (isset($_SESSION['username']))

{

    unset($_SESSION['username']);

}
if (isset($_SESSION['user_m']))

{

    unset($_SESSION['user_m']);

}
?>

<!DOCTYPE html>

<html dir="rtl">

    <head>

        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

        <title>

            تسجيل خروج

        </title>

        <link href="style.css" rel="stylesheet" type="text/css" />

    </head>

    <body>

        <div class="mainLayout">



            <div class="content">

                <h3> لقد تم تسجيل الخروج سيتم النتقال الى صفحة تسجيل الدخول تلقائيا ً

                </h3>

                <script type="text/javascript">

                    setTimeout(function () {

                        window.location.href = "./index.php";

                    }, 1000);

                </script>

            </div>

        </div>

    </body>

</html>