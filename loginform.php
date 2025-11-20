<?php
include('connect.php');
session_start();
?>
<html>
<head>
<title>login form</title>
</head>
<body>
<center>
<h2>Login page</h2>
<form action="check.php" method="post">
username:<input type="text" name="uname"><br><br>
password:<input type="password" name="pword"><br><br>
<input type="submit" name="submit" value="submit"><br><br>
</form>
</center>
</body>
</html>
<?php
if($_GET){
$msg=$_GET['msg'];
echo"<center>";
echo"<br><br>".$msg."<br>";
echo"</center>";
}
?>
