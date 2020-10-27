<?php 
	$id = $_GET['id'];
	include("connectdb.php");
	$sqld = "DELETE FROM `tb_unit` WHERE `unit_ID`='".$id."' ";
	if (mysqli_query($conn, $sqld)){
        header("Location: ../course.php");
    } else {
		echo "ข้อมูลผิดพลาด";
	}

 ?>