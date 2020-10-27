<?php
if (!empty($_POST['c_id']) && !empty($_POST['c_name'])) {
	$cid = $_POST['c_id']; $cname = $_POST['c_name'];
	include('connectDB.php');
	$sqled = "UPDATE `tb_course` SET `course_Name`='$cname' WHERE `course_ID`='$cid'";
	if (mysqli_query($conn,$sqled)) {
		header("Location: ../course.php");
	} else{
		echo "ข้อมูลผิดพลาด".mysqli_error($sqled);
	}
}
?>