<?php 
include('connectDB.php');
$cID = $_POST['cid'];
$uID = $_POST['uid'];
$num = count($_POST["question"]);
	for($i=0;$i<$num;$i++){
		$imgq1 = $_FILES["imgq".($i)]['name'];
		$imga1 = $_FILES["imga1".($i)]['name'];
		$imga2 = $_FILES["imga2".($i)]['name'];
		$imga3 = $_FILES["imga3".($i)]['name'];
		$imga4 = $_FILES["imga4".($i)]['name'];
		// $name = randomName($pdf_name);
		move_uploaded_file($_FILES["imgq".($i)]["tmp_name"], "../assets/img/".$imgq1);
		if(!empty($imgq1)){
			$pathq = 'assets/img/'.$imgq1;
		} else { $pathq = ""; }
	    move_uploaded_file($_FILES["imga1".($i)]["tmp_name"], "../assets/img/".$imga1);
	    if (!empty($imga1)) {
	    	$patha1 = 'assets/img/'.$imga1;
	    } else { $patha1 = ""; }
	    move_uploaded_file($_FILES["imga2".($i)]["tmp_name"], "../assets/img/".$imga2);
	    if (!empty($imga2)) {
	    	$patha2 = 'assets/img/'.$imga2;
	    } else { $patha2 = ""; }
	    move_uploaded_file($_FILES["imga3".($i)]["tmp_name"], "../assets/img/".$imga3);
	    if (!empty($imga3)) {
	    	$patha3 = 'assets/img/'.$imga3;
	    } else { $patha3 = ""; }
	    move_uploaded_file($_FILES["imga4".($i)]["tmp_name"], "../assets/img/".$imga4);
	    if (!empty($imga4)) {
	    	$patha4 = 'assets/img/'.$imga4;
	    } else { $patha4 = ""; }
	    $data["No".($i+1)] = [
	        "question" => $_POST["question"][$i],
	        "imgq" => $pathq,
	        "ก" => $_POST["a1"][$i],
	        "ข" => $_POST["a2"][$i],
	        "ค" => $_POST["a3"][$i],
	        "ง" => $_POST["a4"][$i],
	        "imga1" => $patha1,
	        "imga2" => $patha2,
	        "imga3" => $patha3,
	        "imga4" => $patha4,
	        "เฉลย" => $_POST["answer".($i)],
	        "num" => $i
	    ];
		$datanum = $data["No".($i+1)]["num"];
	    $dataall = $data["No".($i+1)]["question"].",\r\n".$data["No".($i+1)]["ก"].",\r\n".$data["No".($i+1)]["ข"].",\r\n".$data["No".($i+1)]["ค"].",\r\n".$data["No".($i+1)]["ง"].",\r\n".$data["No".($i+1)]["เฉลย"].",\r\n".$data["No".($i+1)]["imgq"].",\r\n".$data["No".($i+1)]["imga1"].",\r\n".$data["No".($i+1)]["imga2"].",\r\n".$data["No".($i+1)]["imga3"].",\r\n".$data["No".($i+1)]["imga4"].",\r\n";
	    // echo "<pre>";
	    // echo $dataall;
	    // echo $datanum;
	    // echo "</pre>";
		$sqlet = "UPDATE `tb_a_q` SET `course_ID`='".$cID."',`unit_ID`='".$uID."',`aq_detail`='".$dataall."' WHERE `unit_ID`='".$uID."' AND `aq_num`='".$datanum."'";
		// echo $sqlt;
		if (mysqli_query($conn,$sqlet)) {
			header("Location: ../test.php");
		} else {
			echo "erorr".mysqli_error($sqlet);
		}

	}
?>