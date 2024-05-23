

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


<head>
<link rel="stylesheet" type="text/css" href="form.css">
</head><?php
$id=$_GET['od'];
$con=mysqli_connect("localhost","root","","website");
$q=mysqli_query($con,"select*from credentials where id='$id'");
while($f=mysqli_fetch_array($q)){


    ?>

<body>
	<div class="container">
		<h1>Form for update informations</h1>
		<form method="post">
			<label for="username">Username:</label>
			<input type="text" id="username" name="username" value="<?php echo $f['username'];?>" required>
			<br>
			<label for="password">Password:</label>
			<input type="password" id="password" name="password" value="<?php echo $f['password'];?>" required>
			<br>
			<input type="submit" value="Edit" name="subs">
		</form>
	</div>


<?php
}
if(isset($_POST['subs'])){

    $a=$_POST['username'];
    $b=$_POST['password'];
    $con=mysqli_connect("localhost","root","","website");
    $q=mysqli_query($con,"update credentials set username='$a',password='$b' where id='$id'");
    if($q){
    
header("location:form.php");
    }
    
    else
    echo"failed";
    
    }
    ?>
