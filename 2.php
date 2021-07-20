<?php
<?php
$username="root";
$password=" ";
$server="localhost";
$database="fintech";
$fname=$_POST['fname'];
$fname=$_POST['lname'];
$dob = $_POST['date'];
$gender = $_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$con=mysqli_connect("localhost","root","")or die("unable to connect to host"); 
$sql=mysqli_select_db($con,$database)or die("unable to connect to database"); 
$sql="INSERT INTO loandetails values('$name','$email','$phone','$message')";
mysqli_close($con);
?>
?>