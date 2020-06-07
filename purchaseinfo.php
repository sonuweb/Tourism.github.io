<?php

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}
else{
	echo "No connection";
}
mysqli_select_db($con,'purchaseinfo');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$rupees = $_POST['rupee'];

$query = "insert into purchasetable (name,email,mobile,rupee)
values('$user','$email','$mobile','$comments')";

echo "$query";

mysqli_query($con,$query );

header('location:purchase.php')


?>