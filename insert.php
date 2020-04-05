<?php include_once("db/db.php");?>
<?php
$date=date('d-m-Y');
$time=date("h:i a");
$fname=mysqli_real_escape_string($conn,$_POST['FName']);
$lname=mysqli_real_escape_string($conn,$_POST['LName']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$address1=mysqli_real_escape_string($conn,$_POST['address1']);
$address2=mysqli_real_escape_string($conn,$_POST['address2']);
$zip=mysqli_real_escape_string($conn,$_POST['zipc']);
$comment=mysqli_real_escape_string($conn,$_POST['comment']);

$query="INSERT INTO `contact`(`date`, `time`, `fname`, `lname`, `email`, `phone`, `company`, `address1`, `address2`, `zip`, `comment`) VALUES ('$date','$time','$fname','$lname','$email','$phone','$company','$address1','$address2','$zip','$comment')";

$exe=mysqli_query($conn,$query);
if($exe)
{
	echo "Inserted";
}
else
{
	echo "Error";
}

?>