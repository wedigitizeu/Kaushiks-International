<?php include_once("db/db.php");?>
<?php
$date=date('d-m-Y');
$time=date("h:i a");
$fname=mysqli_real_escape_string($conn,$_POST['fName']);
$lname=mysqli_real_escape_string($conn,$_POST['lName']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$phone=mysqli_real_escape_string($conn,$_POST['phone']);
$company=mysqli_real_escape_string($conn,$_POST['company']);
$address1=mysqli_real_escape_string($conn,$_POST['address1']);
$address2=mysqli_real_escape_string($conn,$_POST['address2']);
$zip=mysqli_real_escape_string($conn,$_POST['zip']);
$comment=mysqli_real_escape_string($conn,$_POST['comment']);

$query="INSERT INTO `contact`(`date`, `time`, `fname`, `lname`, `email`, `phone`, `company`, `address1`, `address2`, `zip`, `comment`) VALUES ('$date','$time','$fname','$lname','$email','$phone','$company','$address1','$address2','$zip','$comment')";

$exe=mysqli_query($conn,$query);
if($exe)
{
	echo "<p style='color:#f41c54;'>We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our staff members. Otherwise, we will reply by email as soon as possible.</p>";
}
else
{
	echo "Error";
}

?>