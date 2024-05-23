<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logo Design Services</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Navigation -->
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="products.html">Our Products</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="form.php">Manage Users</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>

	<div class="container">
		<h1>User Registration form</h1>
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" required>
			<br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" required>
			<br>
			<input type="submit" value="Create New Account" name="sub">
		</form>
	</div>
	</body><center>
<?php
if(isset($_POST['sub'])){

$a=$_POST['username'];
$b=$_POST['password'];
$con=mysqli_connect("localhost","root","","website");
$q=mysqli_query($con,"insert into credentials values('','$a','$b')");
if($q){

echo "$a inserted";
}

else
echo"failed";

}
?>

<center>
<h1><u>Manage Users informations</h1></u>
<table border="1" style="border-collapse: none;">

<tr><th>ID</TH><th>Username</TH><th>password</TH><th>actions</TH>
</tr>

<?php
$con=mysqli_connect("localhost","root","","website");
$q=mysqli_query($con,"select*from credentials order by id desc");

while($f=mysqli_fetch_array($q)){



	?>
<tr><td><?php echo $f['id'];?></td>
<td><?php echo $f['username'];?></td>
<td><?php echo $f['password'];?></td>
<td><div class="bg"><a href="update.php?od=<?php echo $f['id'];?>">Update
<a href="delete.php?oda=<?php echo $f['id'];?>" style="background-color:red">Delete</td></tr>
</div>
	<?php
}
?>


</table>
<style>
	 .bg a{
		text-decoration: none;
		background-color: blue;
		color: white;
		margin: 20px;
		border-radius: 14px;
		padding: 5px;
	}
	


</style>









</body>
</html>