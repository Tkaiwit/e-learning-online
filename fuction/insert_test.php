<?php 
include('connectDB.php');
$cID = $_POST['cid'];
$uID = $_POST['uid'];
$num = count($_POST["question"]);
	for($i=0;$i<$num;$i++){
		$imgq1 = $_FILES["imgq".($i+1)]['name'];
		$imga1 = $_FILES["imga1".($i+1)]['name'];
		$imga2 = $_FILES["imga2".($i+1)]['name'];
		$imga3 = $_FILES["imga3".($i+1)]['name'];
		$imga4 = $_FILES["imga4".($i+1)]['name'];
		// $name = randomName($pdf_name);
		move_uploaded_file($_FILES["imgq".($i+1)]["tmp_name"], "../assets/img/".$imgq1);
	    $pathq = 'assets/img/'.$imgq1;
	    move_uploaded_file($_FILES["imga1".($i+1)]["tmp_name"], "../assets/img/".$imga1);
	    $patha1 = 'assets/img/'.$imga1;
	    move_uploaded_file($_FILES["imga2".($i+1)]["tmp_name"], "../assets/img/".$imga2);
	    $patha2 = 'assets/img/'.$imga2;
	    move_uploaded_file($_FILES["imga3".($i+1)]["tmp_name"], "../assets/img/".$imga3);
	    $patha3 = 'assets/img/'.$imga3;
	    move_uploaded_file($_FILES["imga4".($i+1)]["tmp_name"], "../assets/img/".$imga4);
	    $patha4 = 'assets/img/'.$imga4;
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
	        "เฉลย" => $_POST["answer".($i+1)]
	    ];
		
	    $dataall = $data["No".($i+1)]["question"].",\r\n".$data["No".($i+1)]["ก"].",\r\n".$data["No".($i+1)]["ข"].",\r\n".$data["No".($i+1)]["ค"].",\r\n".$data["No".($i+1)]["ง"].",\r\n".$data["No".($i+1)]["เฉลย"].",\r\n".$data["No".($i+1)]["imgq"].",\r\n".$data["No".($i+1)]["imga1"].",\r\n".$data["No".($i+1)]["imga2"].",\r\n".$data["No".($i+1)]["imga3"].",\r\n".$data["No".($i+1)]["imga4"];
	    echo $dataall;
		$sqlt = "INSERT INTO `tb_a_q`(`course_ID`, `unit_ID`, `aq_detail`,`aq_num`) VALUES ('$cID','$uID','$dataall','$i+1')";
		// echo $sqlt;
		if (mysqli_query($conn,$sqlt)) {
			header("Location: ../test.php");
		} else {
			echo "erorr".mysqli_error($sqlt);
		}

	}
?>