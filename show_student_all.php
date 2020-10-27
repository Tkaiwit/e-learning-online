<?php $page='student'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <?php include('fuction/connectDB.php'); $sqll = "SELECT count(member_Status) FROM `tb_member` WHERE member_Status = 2 ";
            $rss = mysqli_query($conn,$sqll);
            $counnt = mysqli_fetch_array($rss);
          ?>
          <h5 class="card-title">รายชื่อนักเรียนนักศึกษาทั้งหมด</h5>
            <p class="card-category"><b style="border-bottom:1px solid #eaeaea;">จำนวน <?php echo $counnt[0]; ?> คน</b>
            </p>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
<table class="table" >
  <thead class=" text-primary">
    <tr>
      <th>No.</th>
      <th>ชื่อ-นามสกุล</th>
      <th>อีเมลล์</th>
      <th>เพศ</th>
      <th class="text-center">โทร</th>
    </tr>
  </thead>
  <tbody>
<?php include('fuction/connectDB.php');
  $sql = "SELECT * ,count(member_Status) FROM tb_member WHERE member_Status = 2";
  $rs = mysqli_query($conn,$sql);
  while ($row = mysqli_fetch_array($rs)) { 
  $i=0;$i < $row[0];
?>
  <tr>
      <td>
        <?php $i = $i+1; echo $i; ?> 
      </td>
      <td>
        <?php echo $row['member_FName']; ?> &nbsp; <?php echo $row['member_LName']; ?>                    
      </td>
      <td>
        <?php echo $row['member_email']; ?>
      </td>
      <td>
        <?php if ($row["member_gender"] == 1){
          echo "ชาย";
        } else {
          echo "หญิง";
        } ?>
      </td>
      <td class="text-center">
        <?php echo $row['member_Tel']; ?>
      </td>
    </tr>
<?php }?>
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
<?php include('layer/footer.php'); ?>