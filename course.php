<?php $page='coures'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <?php include('fuction/connectDB.php'); $sqll = "SELECT count(course_ID) FROM `tb_course`";
            $rss = mysqli_query($conn,$sqll);
            $counnt = mysqli_fetch_array($rss);
            
          ?>
          <h5 class="card-title"><?php echo $counnt[0]; ?> Course</h5>
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
            <p class="card-category">เพิ่มรายวิชา
              <a href="add_coures.php">คลิกที่นี่</a>&nbsp;&nbsp;/&nbsp;&nbsp;
              เพิ่มหน่วยที่ของรายวิชา
              <a href="add_unit.php">คลิกที่นี่</a>
            </p>
<?php } } ?>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
          <table class="table" >
                    <thead class=" text-primary">
                      <tr><th>
                        รหัสวิชา
                      </th>
                      <th>
                        ชื่อรายวิชา
                      </th>
                      <th>หน่วยทั้งหมด</th>
                      <th>
                        ชื่ออาจารย์
                      </th>
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
                      <th class="text-center">จัดการ</th>
<?php } } ?>
                    </tr></thead>
                    <tbody>
                      <?php include('fuction/connectDB.php');
                      $sql = "SELECT * FROM `tb_course` INNER JOIN tb_member ON tb_course.member_ID = tb_member.member_ID";
                      $rs = mysqli_query($conn,$sql);
                      while ($row = mysqli_fetch_array($rs)) { ?>
                        
                      <tr>
                        <td>
                          <a href="detail_course.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_ID']; ?>
                          </a>
                        </td>
                        <td>
                          <a href="detail_course.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_Name'] ?> 
                          </a>                      
                        </td>
                        <td>
                          <?php $squnit = "SELECT COUNT(*) FROM `tb_unit` where course_ID='".$row['course_ID']."' ";
                          $urs = mysqli_query($conn,$squnit);
                          $count = mysqli_fetch_array($urs);
                          echo $count[0];
                          ?>
                        </td>
                        <td>
                          อาจารย์ <?php echo $row['member_FName']." ".$row['member_LName']; ?>
                        </td>
<?php 
if (empty($_SESSION)) {
} else {
if ($_SESSION['status'] == 1){ ?>
                        <td class="text-center">
                          <li style="list-style: none;">
                          <a  href="edit_course.php?id=<?php echo $row['course_ID']?>">แก้ไข</a>&nbsp;&nbsp;&nbsp;
                          <a onclick="delectcourse()" style="color:#608CEE;">ลบ</a>
                        </li>
                        </td>
<?php } } ?>
                      </tr>
<script>
function delectcourse() {
  if (confirm("คุณแน่ใจ ต้องการลบข้อมูลหรือไม่!")) {
    location.replace("fuction/delect_course.php?id=<?php echo $row['course_ID']?>");
  } else {
    txt = "You pressed Cancel!";
  }
}
</script>
                    <?php
                      }
                       ?>
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