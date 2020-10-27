<?php $page='addcoures'; include('layer/header.php'); ?>
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
            <p class="card-category"><b style="border-bottom: 1px solid #eaeaea;">เพิ่มรายวิชา</b>
              <a href="add_coures.php"disabled="">คลิกที่นี่</a>&nbsp;&nbsp;/&nbsp;&nbsp;
              เพิ่มหน่วยที่ของรายวิชา
              <a href="add_unit.php">คลิกที่นี่</a>
            </p>
            
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
		<form action="fuction/insert_coures.php" method="POST">
			<div class="form-group">
            <label>รหัสวิชา :</label>
                <input type="text" class="form-control" name="c_id" placeholder="กรอกรหัสวิชา..." value="">
            </div>
			<div class="form-group">
            <label>ชื่อวิชา :</label>
                <input type="text" class="form-control" name="c_name" placeholder="กรอกชื่อวิชา..." value="">
            </div>
            <div class="form-group">
            <label>ชื่ออาจารย์ :</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $_SESSION['name'] ?>">
                <input type="text" name="member_id" value="<?php echo $_SESSION['user']?>" hidden>
            </div>
            <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">เพิ่มรายวิชา</button>

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