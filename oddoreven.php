<html>
<head>
<title>Odd or Even </title>
</head>
<body>
<h2>ODD OR EVEN CHECKER</h2>
<form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
Enter a number: 
<input type="text" name="number">
<input type="submit" value="check">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"]=="GET")
{
if (isset($_GET["number"]))
{
$number=$_GET["number"];
if(is_numeric($number)){
if($number%2==0){
echo"<p>{$number} is an Even number.</p>";
}
else{
echo"<p>{$number} is an Odd number.</p>";
}
}
}
?>
</body>
</html>

