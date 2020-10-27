<?php 
include('connectDB.php');
if (!empty($_POST)) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$email = $_POST['email'];
	$fn = $_POST['fn'];
	$ln = $_POST['ln'];
	$tel = $_POST['tel'];
	$gender = $_POST['gender'];
	$sqlm = "INSERT INTO `tb_member`(`member_ID`, `member_Password`, `member_FName`, `member_LName`, `member_Status`, `member_Tel`, `member_email`, `member_gender`) VALUES ('".$user."','".$pass."','".$fn."','".$ln."',2,'".$tel."','".$email."','".$gender."')";
	if (mysqli_query($conn,$sqlm)) {
	 	echo "1";
	 } else {
	 	echo "erorr".mysql_error($sqlm);
	 }
	 exit();
}
?>