<?php
$uploaddir = '/home/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
$name = $_POST['name'];

if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile))
{    echo "File is valid, and was successfully uploaded.\n";
}
else   {   echo "File size greater than 300kb!\n\n";   }

echo "'$name'\n";
$host = "localhost"; 
$user = "postgres"; 
$pass = "postgres"; 
$db = "postgres"; 

$con = pg_connect("host=$host dbname=$db user=$user password=$pass")
    or die ("Could not connect to server\n"); 
$query = "insert into image values ('$name', lo_import('$uploadfile'), 'now')";
$result = pg_query($query);

if($result)
{
    echo "File is valid, and was successfully uploaded.\n";
    unlink($uploadfile);
}
else
{
    echo "Filename already exists. Use another filename. Enter all the values.";
    unlink($uploadfile);
}
pg_close($con);
?>