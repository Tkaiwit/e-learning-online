<?php $page='test'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <h5 class="card-title"><?php echo $_GET['id']?></h5>
          <?php include('fuction/connectDB.php');
          $id = $_GET['id'];
                $sqll = "SELECT * FROM `tb_course` WHERE course_ID='".$id."'";
                $rss = mysqli_query($conn,$sqll);
                while ($rows = mysqli_fetch_array($rss)) { ?>
<?php if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
            <p class="card-category">แบบทดสอบ<?php echo $rows['course_Name']; ?>&nbsp;&nbsp;/&nbsp;&nbsp;
              <!-- <a href="https://nucleoapp.com/?ref=1712">Click Now</a> -->
               เพิ่มแบบทดสอบหน่วยที่ของรายวิชา
              <a href="add_test.php">คลิกที่นี่</a>
            </p>
        <?php } } } ?>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
          	<table class="table" >
                    <thead class=" text-primary">
                      <th>หน่วยที่</th>
                      <th>จัดการ</th>
                      <th class="text-center">
                        คะแนนล่าสุด
                      </th>
                    </tr></thead>
                    <?php include('fuction/connectDB.php');
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM `tb_a_q` INNER JOIN `tb_unit` ON `tb_a_q`.unit_ID = `tb_unit`.unit_ID
                    WHERE `tb_a_q`.course_ID='".$id."' GROUP BY `tb_a_q`.unit_ID";
                    $sq = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($sq)) {?>
                    	
                    <tr>
                    	<td><a href="view_test.php?ids=<?php echo $row['unit_ID'];?>">แบบทดสอบ <?php echo $row['unit_Name']?></a>
                      </td>
                    <td>
                          <li style="list-style: none;">
                            <!-- <label>10/10</label> -->
                          <a  href="edit_test.php?id=<?php echo $row['unit_ID']?>">แก้ไข</a>&nbsp;&nbsp;&nbsp;
                          <a  href="delect_test.php">ลบ</a>
                        </li>
                        </td>
                        <td class="text-center">
<?php include('fuction/connectDB.php');
$qsl = "SELECT * FROM `tb_scores` where member_ID = '".$_SESSION['user']."' AND unit_ID ='".$row['unit_ID']."' ORDER BY s_datetime DESC";
$qery = mysqli_query($conn,$qsl);
$mays = mysqli_fetch_array($qery);
 ?>
                          <label>
                            <?php if(empty($mays['s_Scores'])){echo "0";} else { echo $mays['s_Scores']; } ?>/10</label>
                          <!-- <a href=""><i style="font-size: 20px;" class="nc-icon nc-cloud-download-93"></i></a> -->
                        </td>
                    </tr>
                    <?php
                    }
                     ?>
                <tbody>
                </tbody>
            </table>
          </div>
         </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php') ?>