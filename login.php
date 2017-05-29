<?php session_start(); ob_start();?>
<html>
<head>
<title>Contoh Pemakaian Session</title>
</head>
<body>
<?php 
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
echo"<form action=\"$php_selt\"method=\"post\">";
?>
<p>
<pre>
     <b>Silahkan Login</b><br>
User  : <input type="text" name="user" value="" ><br>
Sandi : <input type="password" name="sandi" value="" ><br>
		<input type="submit" name="login" value="login">
</pre>
</p>
</form>
<?php
if(isset($_POST['login']))
{
	$lgnuser="stekom"; $lgnsandi="605";
	/*untuk sementara contoh nama user dan pass merupakan isi variabel $lgnuser dan $lgnsandi. untuk selanjutnya kita akan mencoba mengambil data yang tersimpan dalam tabel*/
	if(trim($_POST['user'])==$lgnuser and trim($_POST['sandi'])==$lgnsandi)
	{	ob_end_clean();
		$_SESSION['user']=$_POST['user'];
		$_SESSION['sandi']=$_POST['sandi'];
		header("Location: menuinternal.php");
		exit();
	}	
}
?>
</body>
</html>