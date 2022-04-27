<!DOCTYPE html>
<head>
<title>UPDATE PostgreSQL data with PHP</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>li {list-style: none;}</style>
</head>
<body>
<h2>Supply bookid and enter</h2>
<ul>
<form name="display" action="enter-bookid.php" method="POST" >
<li>Book ID:</li>
<li><input type="text" name="bookid" /></li>
<li><input type="submit" name="submit" /></li>
</form>
</ul>
<php$db = pg_connect("host=localhost port=5432 dbname=MainDatabase user=postgres password=postgres");
$result = pg_query($db, "SELECT * FROM book where book_id = '$_POST[bookid]'");
$row = pg_fetch_assoc($result);
if (isset($_POST['submit'])){
echo "<ul><form name='update' action='enter-bookid.php' method='POST' >
<li>Book ID:</li>
<li><input type='text' name='bookid_updated' value='$row[book_id]' /></li>
<li>Book Name:</li>
<li><input type='text' name='book_name_updated' value='$row[name]' /></li>
<li>Price (USD):</li><li><input type='text' name='price_updated' value='$row[price]' /></li>
<li>Date of publication:</li>
<li><input type='text' name='dop_updated' value='$row[date_of_publication]' /></li>
<li><input type='submit' name='new' /></li>
</form>
</ul>";}
if (isset($_POST['new'])){
$result = pg_query($db, "UPDATE book SET book_id = $_POST[bookid_updated],
name = '$_POST[book_name_updated]',price = $_POST[price_updated],
date_of_publication = $_POST[dop_updated]");
if (!$result){
echo "Update failed!!";
}
else
{
echo "Update successfull;";
} 
}?>
</body>
</html>
 