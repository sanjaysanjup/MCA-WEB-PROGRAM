<?php
include("connect.php);
?>
<html>
<head>
<title>BOOK DETAILS</title>
<body>
<center>
<h2>BOOK DETAILS</h2>
<form action="display.php" method="POST">
Book number:<input type="text" name="bookno"><br><br>
Book title:<input type="text" name="booktitle"><br><br>
Book edition: <input type="number" name="booked"><br><br>
Book publisher: <input type="text" name="bookpub" value=""><br><br>
<input type="submit" name="submit" value="submit">
</form>
</center>
</body>
</html>

