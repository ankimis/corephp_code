<?php
session_start();

if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]== true ){
  header("Location: http://localhost/ankit/ragistration1/welcome.php");
}


?>


<?php
$host = "localhost";
$port = "5432";
$dbname = "postgres";
$user = "postgres";
$password = "postgres"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
if(isset($_POST['submit'])){
    
    $hashpassword = md5($_POST['pwd']);
    $sql ="select *from public.user where email = '".pg_escape_string($_POST['email'])."' and password ='".pg_escape_string($_POST['pwd'])."'";
    $data = pg_query($dbconn,$sql); 
    $login_check = pg_num_rows($data);
   
   if($login_check > 0){ 
      $rec= pg_fetch_assoc($data);
      // print_r($rec);exit();
     
     $_SESSION["email"] = $rec['email'];
     $_SESSION["name"] = $rec['name']; 
     $_SESSION["mobno"] = $rec['mobno']; 
     $_SESSION["isLogin"] = true; 
      // header("location: ./welcome.php");
      header("Location: http://localhost/ankit/ragistration1/welcome.php");
    }else{        
        echo "Invalid Details";
        header("Location: http://localhost/ankit/ragistration1/welcome.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PHP PostgreSQL Registration & Login Example </title>
  <meta name="keywords" content="PHP,PostgreSQL,Insert,Login">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

<div class="container">
  <h2>Login Here </h2>
  <form method="post">
  
     
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    
     
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    <button>
    <a type="button" href="ragistration.php"> LogOut</a>
   </button> 
  </form>
</div>


</body>
</html>