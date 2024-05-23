<?php
$id=$_GET['oda'];

$con=mysqli_connect("localhost","root","","website");
$q=mysqli_query($con,"delete from credentials where id='$id'");

if($q){

header("location:form.php");

}
else
echo"failed";
?>