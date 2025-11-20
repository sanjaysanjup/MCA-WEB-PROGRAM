<?php
include("connect.php");
if($_POST){
$bookno=$_POST['bookno'];
$booktitle=$_POST['booktitle'];
$bookedition=$_POST['bookedition'];
$bookpub=$_POST['bookpub'];
$sql=mysqli_query($conn,"INSERT INTO book_details VALUES('$bookno','$booktitle','$bookedition','$bookpub')");
$query=mysqli_query($conn,"SELECT*FROM book_details");}
?>
<html>
<head>
<title>Display Book</title>
</head>
<body>
<h2 align="center">Book details</h2><br>
<table align="center" border="1px solid black">
<tr>
<th>Book number</th>
<th>Title</th>
<th>Edition</th>
<th>Publisher</th>
</tr>
<tr>
<?php
while($row=mysqli_fetch_assoc($query)){
echo"<tr>";
echo"<td>".$row['bookno']."</td>";
echo"<td>".$row['booktitle']."</td>";
echo"<td>".$row['bookedition']."</td>";
echo"<td>".$row['bookpub']."</td>";
echo"</tr>";
}
?>
</tr>
</table>
</body>
</html>
