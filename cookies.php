<html>
<head>
<title></title>
</head>
<body>
<?php
error_reporting(E_ALL ^(E_NOTICE|E_WARNING));
if(isset($_COOKIE['kampus']))
	{
	echo"cookies kampus adalah = "
	.$_COOKIE['kampus'];
	}
?>
</body>
</html>