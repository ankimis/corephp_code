<?php
$servername = "localhost";
$username = "root";
$password = " ";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<html>
<body>
    <head>
        <link rel="stylesheet" href="styles.css">
    </head>
<h1 class="a">submit form on trip</h1>
<h2>HTML Forms</h2>
 
<div class="e1"> 
<form action="#" method="post">
   
  <input type="text" id="fname" name="fname"  placeholder="enter your name"><br>
   
  <input type="text" id="l_name" name="l_name" placeholder="enter your lname"><br><br>
  <input type="submit" value="Submit">
</form> 
</div>
<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
 
</body>
</html>