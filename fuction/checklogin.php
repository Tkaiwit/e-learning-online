<?php 
session_start();
	include('connectDB.php');
	$user = $_POST['Username'];
	$pass = $_POST['Password'];
	// echo $user.$pass;
	// $uname = mysqli_real_escape_string($conn,$_POST['username']);
	// $password = mysqli_real_escape_string($conn,$_POST['password']);
	$sqllogin = "SELECT * FROM `tb_member` WHERE member_ID='".$user."' AND member_Password='".$pass."'";
	$result = mysqli_query($conn,$sqllogin);
	if($row=mysqli_fetch_array($result)){
		if ($row['member_Status']== 1 ) {
			$_SESSION['user'] = $user;
			$_SESSION['name'] = $row['member_FName']." ".$row['member_LName'];
			$_SESSION['status'] = $row['member_Status'];
			// header("Location: ../student.php");
			echo "1";
			// echo 1;
		} else {
			$_SESSION['user'] = $user;
			$_SESSION['name'] = $row['member_FName']." ".$row['member_LName'];
			$_SESSION['status'] = $row['member_Status'];
			// header("Location: ../teacher.php");
			echo "2";
		}
	} else {
		echo "erorr";
	}
	exit();
 ?>
