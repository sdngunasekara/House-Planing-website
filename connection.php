
<html>
<head><title> connection.php page</title>
</head>
<body>
<?php
	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "employeeweb1";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>

</body>
</html>