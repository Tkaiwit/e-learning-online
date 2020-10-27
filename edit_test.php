<?php $page='test'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <h5 class="card-title">เพิ่มแบบทดสอบ</h5>
            <p class="card-category">&nbsp;&nbsp;&nbsp;&nbsp;
               <b>แก้ไขแบบทดสอบหน่วยที่ของรายวิชา
              <a href="add_test.php">คลิกที่นี่</a></b>
            </p>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
		<form action="fuction/uploadtest.php" method="POST" enctype="multipart/form-data">
      <?php include('fuction/connectDB.php'); $id = $_GET['id']; 
      $sqlet = "SELECT * FROM `tb_a_q` WHERE unit_ID = '". $id."'";
      $reset = mysqli_query($conn,$sqlet);
      $etrow = mysqli_fetch_array($reset);
      ?>
      <div class="row">
      <div class="form-group col-md-6">
            <label>เลือกรายวิชา :</label>
              <select class="form-control" name="cid" id="exampleFormControlSelect1">
                <option value="0">กรุณาเลือกหน่วยของรายวิชา</option>
                <?php include('fuction/connectDB.php'); $sqlc = "SELECT * FROM `tb_course`";
                  $rsc = mysqli_query($conn,$sqlc);
                  while ($row=mysqli_fetch_array($rsc)) { ?> 
                    <?php if ($etrow['course_ID'] == $row['course_ID']) { ?>
                      <option selected="selected" value="<?php echo $row['course_ID']?>"><?php echo $row['course_Name']; ?></option>
                  <?php } else { ?>
                      <option value="<?php echo $row['course_ID']?>"><?php echo $row['course_Name']; ?></option>
                  <?php } ?>
                
                <?php
                  }
                ?>
              </select>
      </div>
			<div class="form-group col-md-6">
            <label>เลือกหน่วยของรายวิชา :</label>
              <select class="form-control" name="uid" id="exampleFormControlSelect1">
                <option value="0">กรุณาเลือกหน่วยของรายวิชา</option>
                <?php include('fuction/connectDB.php'); $sql = "SELECT * FROM `tb_unit`";
                  $rs = mysqli_query($conn,$sql);
                  while ($row=mysqli_fetch_array($rs)) { ?> 
                    <?php if ($row['unit_ID'] == $id){?>
                      <option selected="selected" value="<?php echo $row['unit_ID']?>"><?php echo $row['unit_Name']; ?></option>
                    <?php } else { ?>
                      <option value="<?php echo $row['unit_ID']?>"><?php echo $row['unit_Name']; ?></option>
                    <?php } ?>
               
                <?php
                  }
                ?>
              </select>
      </div>
      </div>
      
        <?php 
        $sqlsh = "SELECT * FROM `tb_a_q` WHERE unit_ID='".$id."'";
              $sqsd = mysqli_query($conn,$sqlsh);
              while ($rowsd=mysqli_fetch_array($sqsd)) {
        $qs = $rowsd['aq_detail'];
        $datas = explode(",\r\n",$qs);
       ?>
      <div id="dynamicInput">
        <h3>ข้อ <?php  echo ($rowsd['aq_num']+1)?></h3>
      <div class="row">
			<div class="form-group col-md-8">
            <label>คำถาม :</label>
                <input type="text" class="form-control" name="question[]" placeholder="กรอกชื่อวิชา..." value="<?php echo $datas[0] ?>">
      </div>
      <div class="col-md-4">
        <div style="margin-top: 25px;padding: 0px">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" value="<?php echo $datas[6] ?>" name="imgq<?php echo $rowsd['aq_num']?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
      </div>
    </div>
    
      <div class="row">
      <div class="form-group col-md-3">
        <div>
          <label>ก : 
            <?php if ($datas[5] == '1'){ ?> <input type="radio" checked="" value="1" name="answer<?php echo $rowsd['aq_num']?>"> <?php } else { ?><input type="radio"  value="1" name="answer<?php echo $rowsd['aq_num']?>"><?php } ?>
          </label>
            <input type="text" class="form-control" name="a1[]" placeholder="กรอกชื่อวิชา..." value="<?php echo $datas[1]?>">
        </div>  
      </div>
      <div class="form-group col-md-3">
          <label>ข : 
            <?php if ($datas[5] == '2'){ ?> <input type="radio" checked="" value="2" name="answer<?php echo $rowsd['aq_num']?>"> <?php } else { ?><input type="radio"  value="2" name="answer<?php echo $rowsd['aq_num']?>"><?php } ?>
          </label>
          <input type="text" id="q2" class="form-control" name="a2[]" placeholder="กรอกชื่อวิชา..." value="<?php echo $datas[2]?>">      
      </div>
      <div class="form-group col-md-3">
        <label>ค : 
          <?php if ($datas[5] == '3'){ ?> <input type="radio" checked="" value="3" name="answer<?php echo $rowsd['aq_num']?>"> <?php } else { ?><input type="radio"  value="3" name="answer<?php echo $rowsd['aq_num']?>"><?php } ?>
        </label>
        <input type="text" class="form-control" name="a3[]" placeholder="กรอกชื่อวิชา..." value="<?php echo $datas[3]?>">
      </div>
      <div class="form-group col-md-3">
        <label>ง : 
          <?php if ($datas[5] == '4'){ ?> <input type="radio" checked="" value="3" name="answer<?php echo $rowsd['aq_num']?>"> <?php } else { ?><input type="radio"  value="4" name="answer<?php echo $rowsd['aq_num']?>"><?php } ?>
        </label>
        <input type="text" class="form-control" name="a4[]" placeholder="กรอกชื่อวิชา..." value="<?php echo $datas[4]?>">
      </div>
      </div>
      
      <div class="row">
      <div class="form-group col-md-3">
          <!-- <p>Custom file:</p> -->
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga1<?php echo $rowsd['aq_num']?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>  
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga2<?php echo $rowsd['aq_num']?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>      
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga3<?php echo $rowsd['aq_num']?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga4<?php echo $rowsd['aq_num']?>">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
      </div>
      </div>
      </div>
    <?php }?>

            <div class="form-group">
            <label>ชื่ออาจารย์ :</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $_SESSION['name'] ?>">
                <input type="text" name="member_id" value="<?php echo $_SESSION['user']?>" hidden>
            </div>
            <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">บันทึกแบบทดสอบ</button>
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