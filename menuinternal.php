<?php 
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
session_start();ob_start();
?>
<html>
<head>
<title>Contoh Menu Internal</title>
</head>
<body>
<b>Selamat Datang Di Pengolahan data internal</b>
<br><br>
<?PHP
{
		echo"User Anda:".$_SESSION['user']."<br>";
        echo"Sandi Anda:".$_SESSION['sandi']."<br><br>";
        echo"<form action=\"$php_selt\"method=\"post\">
        	 <input type=\"submit\"name=\"logout\"value=\"Keluar\">
             </form>";
}
?>
</body>
</html>
<?php
if($_POST['logout'])
{	session_destroy();
	ob_end_clean();
	header("Location: login.php");
	exit();
}
?>
