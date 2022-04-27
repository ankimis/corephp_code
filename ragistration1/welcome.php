<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
</head>
<body>

<?php
if(isset($_SESSION["isLogin"]) && $_SESSION["isLogin"]== true ){
?>
Welcome <?php echo $_SESSION["name"]; ?><?php echo $_SESSION["mobno"]?>. Click here to <a href="./logout.php" tite="Logout">Logout.

<?php
}else header("Location:login.php") ;
?>
</body>
</html>