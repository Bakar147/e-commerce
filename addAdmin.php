

<?php



$name = $_POST['uname'];
$email = $_POST['uemail'];
$password = $_POST['upassword'];
$address = $_POST['uaddress'];




$con = mysqli_connect("localhost","root","","satsouqcom");

$q ="insert into admin (name , email,password ,address) values ('$name','$email' ,'$password','$address')";


mysqli_query($con,$q);



header("location:index.php");








?>