<?php $page='test'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <?php include('fuction/connectDB.php'); $sqll = "SELECT count(course_ID) FROM `tb_course`";
            $rss = mysqli_query($conn,$sqll);
            $counnt = mysqli_fetch_array($rss);
            
          ?>
          <h5 class="card-title"><?php echo $counnt[0]; ?> Test</h5>
            <p class="card-category">รายวิชาแบบทดสอบทั้งหมด
            </p>
            
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
                      <th></th>
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
<?php 
if (empty($_SESSION)) { ?>
                        <td>
                          <?php echo $row['course_ID']; ?>
                        </td>
                        <td>
                          <?php echo $row['course_Name'] ?>                    
                        </td>
<?php } else {
if ($_SESSION['status'] == 1){ ?>
                        <td>
                          <a href="detail_test.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_ID']; ?>
                          </a>
                        </td>
                        <td>
                          <a href="detail_test.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_Name'] ?> 
                          </a>                      
                        </td>
<?php } elseif ( $_SESSION['status'] == 2){ ?>
                       <td>
                          <a href="detail_test.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_ID']; ?>
                          </a>
                        </td>
                        <td>
                          <a href="detail_test.php?id=<?php echo $row['course_ID'];?>">
                          <?php echo $row['course_Name'] ?> 
                          </a>                      
                        </td>

<?php } } ?>
                        <td>
                          <?php $squnit = "SELECT * FROM `tb_a_q` where course_ID='".$row['course_ID']."' GROUP BY unit_ID";
                          $urs = mysqli_query($conn,$squnit);?>
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
                          <a  href="edit_course.php?id=<?php echo $row['course_ID'];?>">แก้ไข</a>&nbsp;&nbsp;&nbsp;
                          <a  href="delect_course.php">ลบ</a>
                        </li>
                        </td>
<?php } } ?>
                      </tr>
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