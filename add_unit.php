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
            <p class="card-category">เพิ่มรายวิชา
              <a href="add_coures.php"disabled="">คลิกที่นี่</a>&nbsp;&nbsp;/&nbsp;&nbsp;
              <b>เพิ่มหน่วยที่ของรายวิชา</b>
              <a href="add_unit.php">คลิกที่นี่</a>
            </p>
            
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
		<form action="fuction/insert_unit.php" method="POST" enctype="multipart/form-data">
			     <div class="form-group">
            <label>รายวิชา :</label>
            <select name="c_id" id="" class="form-control" >
              <option value="0" >เลือกรายวิชา...</option>
              <?php $cc = "SELECT * FROM `tb_course`";
              $result = mysqli_query($conn,$cc);
              while ($row=mysqli_fetch_array($result)) { ?>
              <option value="<?php echo $row['course_ID'];?>"><?php echo $row['course_Name'];?></option>
              <?php
              }
               ?>
            </select>
            <!-- <label>รหัสวิชา :</label>
                <input type="text" class="form-control" placeholder="กรอกรหัสวิชา..." value=""> -->
            </div>
			     <div class="form-group">
            <label>ชื่อหน่วยที่ :</label>
                <input type="text" name="u_name" class="form-control" placeholder="กรอกหน่วยที่....." value="">
            </div>
            <div class="form-group">
            <label>ชื่ออาจารย์ :</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $_SESSION['name'] ?>">
                <input type="text" name="member_id" value="<?php echo $_SESSION['user']?>" hidden>
            </div>
            <!-- <div class="form-group" style="text-align: center;border-bottom: 1px solid #eaeaea;">
              <label for="filepicture">Example file input</label>
              <input type="file" name="filepicture" class="form-control-file" id="filepicture">
            </div> -->
            <div class="form-group">
              <input type="file" name="filepicture" id="filepicture" class="custom-file-input" accept="application/pdf">
              <label class="custom-file-label" for="filepicture">Example file input</label>
            </div>
            <div>
              &nbsp;
            </div>
            <div>
              &nbsp;
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