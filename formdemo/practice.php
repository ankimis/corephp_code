<!DOCTYPE html>
<head>
<title>Insert data to PostgreSQL with php - creating a simple web application</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
li {listt-style: none;}
</style>
</head>
<body>
<h2>Enter information regarding book</h2>
<ul>
<form name="insert" action="practice.php    " method="POST" >
<li>bookid:</li><li><input type="text" name="bookid" /></li>
<li>book_name:</li><li><input type="text" name="book_name" /></li>
 
<li><input type="submit" /></li>
<a href="retuendat.php">show employee</a>
</form>
</ul>
</body>
</html>
<?php
$db = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=postgres");
$query = "INSERT INTO book VALUES ('$_POST[bookid]','$_POST[book_name]')";
$result = pg_query($query); 
print_r($result);
?>
