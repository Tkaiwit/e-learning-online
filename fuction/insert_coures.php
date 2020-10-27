<?php
include("connectDB.php");
if (!empty($_POST['c_id']) && !empty($_POST['c_name'])) {
	$cid = $_POST['c_id']; $cname =  $_POST['c_name']; $mid = $_POST['member_id'];
	$sql = "INSERT INTO `tb_course`(`course_ID`,`course_Name`, `member_ID`) VALUES ('".$cid."','".$cname."','".$mid."')";
	if(mysqli_query($conn,$sql)){
		header("Location: ../course.php");
	} else{
		echo "ข้อมูลผิดพลาด".mysqli_error($sql);
	}
}
?>