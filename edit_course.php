<?php $page='coures'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <?php $id = $_GET["id"];
           include('fuction/connectDB.php'); $sqll = "SELECT * FROM `tb_course` WHERE course_ID='".$id."'";
            $rss = mysqli_query($conn,$sqll);
            $counnt = mysqli_fetch_array($rss);
            
          ?>
          <h5 class="card-title"> แก้ไขรายวิชา</h5>
            <p class="card-category"><b>แก้ไขรายวิชา</b>
              <a href="add_coures.php"disabled="">คลิกที่นี่</a>&nbsp;&nbsp;/&nbsp;&nbsp;
              เพิ่มหน่วยที่ของรายวิชา
              <a href="add_unit.php">คลิกที่นี่</a>
            </p>
            
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
		<form action="fuction/editcoures.php" method="POST">
			<div class="form-group">
            <label>รหัสวิชา :</label>
                <input type="text" class="form-control" name="c_id" placeholder="กรอกรหัสวิชา..." value="<?php echo $counnt['course_ID']?>">
            </div>
			<div class="form-group">
            <label>ชื่อวิชา :</label>
                <input type="text" class="form-control" name="c_name" placeholder="กรอกชื่อวิชา..." value="<?php echo $counnt['course_Name']?>">
            </div>
            <div class="form-group">
            <label>ชื่ออาจารย์ :</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $_SESSION['name'] ?>">
                <input type="text" name="member_id" value="<?php echo $_SESSION['user']?>" hidden>
            </div>
            <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">บันทึก</button>
                <a href="course.php" style="color: #fff;" type="button" class="btn btn-danger btn-round">ยกเลิก</a>
            </div>
		</form>
    	</div>
        </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php'); ?>