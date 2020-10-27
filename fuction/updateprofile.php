<?php 
include('connectDB.php');
$sqlp = "UPDATE `tb_member` SET `member_Password`='".$_POST["pass"]."',`member_FName`='".$_POST["fn"]."',`member_LName`='".$_POST["ln"]."',`member_Tel`='".$_POST["tel"]."',`member_email`='".$_POST["email"]."',`member_gender`='".$_POST["gender"]."' WHERE `member_ID`='".$_POST["Username"]."' ";
if (mysqli_query($conn,$sqlp)) {
	echo "1";
} else {
	echo "!444444".mysql_error($sqlp);
}
?>