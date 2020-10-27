<?php $page='coures'; include('layer/header.php'); ?>
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
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
            <p class="card-category"><a href="course.php">บทเรียนทั้งหมด</a><b>&nbsp;&nbsp;/&nbsp;&nbsp;<?php echo $rows['course_Name']; ?></b>&nbsp;&nbsp;/&nbsp;&nbsp;
              <!-- <a href="https://nucleoapp.com/?ref=1712">Click Now</a> -->
               เพิ่มหน่วยที่ของรายวิชา
              <a href="add_unit.php">คลิกที่นี่</a>
            </p>
        <?php } } } ?>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
          	<table class="table" >
                    <thead class=" text-primary">
                      <th>#No</th>
                      <th>หน่วยที่</th>
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
                      <th>จัดการ</th>
<?php } } ?>
                      <th class="text-center">
                        Download
                      </th>
                    </tr></thead>
                    <?php include('fuction/connectDB.php');
                    $sql = "SELECT * FROM `tb_unit` WHERE course_ID='".$id."'";
                    $sq = mysqli_query($conn,$sql);
                    while ($row=mysqli_fetch_array($sq)) {?>
                    <tr>
                      <td><?php echo $row["unit_ID"];?></td>
                    	<td><a href="view_unit.php?ids=<?php echo $row['unit_ID'];?>"><?php echo $row['unit_Name']?></a></td>
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
                    <td>
                        <li style="list-style: none;">
                          <a  href="edit_course.php">แก้ไข</a>&nbsp;&nbsp;&nbsp;
                          <a onclick="delectUnit()" style="color:#608CEE;">ลบ</a>
                        </li>
                    </td>
<?php } }  ?>
                        <td class="text-center">
                          <a href="<?php echo $row['unit_Detail']?>"><i style="font-size: 20px;" class="nc-icon nc-cloud-download-93"></i></a>
                        </td>
                    </tr>
<script>
function delectUnit() {
  if (confirm("คุณแน่ใจ ต้องการลบข้อมูลหรือไม่!<?php echo $row['unit_ID']?>")) {
    window.location.replace("fuction/delect_unit.php?id=<?php echo $row['unit_ID']?>");
  } else {
    txt = "You pressed Cancel!";
  }
}
</script>
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