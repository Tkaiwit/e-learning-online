<?php
if (!empty($_POST['c_id']) && !empty($_POST['u_name']) && !empty($_POST['member_id'])) {
	$cid = $_POST['c_id']; $uname = $_POST['u_name']; $mid = $_POST['member_id'];

	// function randomName($img){
	// 	$test = explode('.', $img);
	//     $ext = end($test);
	//     $name = rand(1000, 9999) . '.' . $ext;

	//     return $name;
	// }

	$pdf_name = $_FILES['filepicture']['name'];
	// $name = randomName($pdf_name);
	move_uploaded_file($_FILES["filepicture"]["tmp_name"], "../pdf/".$pdf_name);
    $path = 'pdf/'.$pdf_name;

	include('connectDB.php');
	$sqlu = "INSERT INTO `tb_unit`(`unit_Name`, `course_ID`, `unit_Detail`, `member_ID`) VALUES ('$uname','$cid','$path','$mid')";
	if (mysqli_query($conn,$sqlu)) {
		header("Location: ../course.php");
	} else{
		echo "ข้อมูลผิดพลาด".mysqli_error($sqlu);
	}
}
 ?>