<?php 
session_start();
	include('connectDB.php');
	$user = $_POST['Username'];
	$totol = $_POST['totol'];
	$cid = $_POST['cid'];
	$uid = $_POST['uid'];
	// echo $user." ".$totol." ".$cid." ".$uid;
	$sqlc = "INSERT INTO `tb_scores`(`member_ID`, `course_ID`, `unit_ID`, `s_Scores`) VALUES ('".$user."','".$cid."','".$uid."','".$totol."') ";
	if($rsec = mysqli_query($conn,$sqlc)){
		echo "1";
	} else {
		echo "erorr".$sqlc;
	}
	
?>

