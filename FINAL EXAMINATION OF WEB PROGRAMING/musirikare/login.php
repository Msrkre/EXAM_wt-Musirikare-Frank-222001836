<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
	<div class="container">
		<h1>Login</h1>
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<br>
			<input type="submit" value="Login" name="subo">
		</form>
	</div>
	</body>

    <center>
<?php
if(isset($_POST['subo'])){

$a=$_POST['username'];
$b=$_POST['password'];
$con=mysqli_connect("localhost","root","","website");
$q=mysqli_query($con,"select*from credentials where username='$a'and password='$b'");


$f=mysqli_fetch_array($q);

if(is_array($f)){
$_SESSION['usere']=$f['username'];
$_SESSION['pass']=$f['password'];


if($_SESSION['usere']==$a and $_SESSION['pass']==$b){
    header("location:index.html");

}}
else
{

echo"incorrect username or password";

}}
?>

</body>
</html>