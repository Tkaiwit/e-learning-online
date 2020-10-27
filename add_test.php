<?php $page='test'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <h5 class="card-title">เพิ่มแบบทดสอบ</h5>
            <p class="card-category">&nbsp;&nbsp;&nbsp;&nbsp;
               <b>เพิ่มแบบทดสอบหน่วยที่ของรายวิชา
              <a href="add_test.php">คลิกที่นี่</a></b>
            </p>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
		<form action="fuction/insert_test.php" method="POST" enctype="multipart/form-data">
      <div class="row">
      <div class="form-group col-md-6">
            <label>เลือกรายวิชา :</label>
              <select class="form-control" name="cid" id="exampleFormControlSelect1">
                <option value="0">กรุณาเลือกหน่วยของรายวิชา</option>
                <?php include('fuction/connectDB.php'); $sqlc = "SELECT * FROM `tb_course`";
                  $rsc = mysqli_query($conn,$sqlc);
                  while ($row=mysqli_fetch_array($rsc)) { ?> 
                <option value="<?php echo $row['course_ID']?>"><?php echo $row['course_Name']; ?></option>
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
                <option value="<?php echo $row['unit_ID']?>"><?php echo $row['unit_Name']; ?></option>
                <?php
                  }
                ?>
              </select>
      </div>
      </div>
      <div id="dynamicInput">
      <div class="row">
			<div class="form-group col-md-8">
            <label>คำถาม :</label>
                <input type="text" class="form-control" name="question[]" placeholder="กรอกชื่อวิชา..." value="">
      </div>
      <div class="col-md-4">
        <div style="margin-top: 25px;padding: 0px">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imgq1">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
        </div>
      </div>
    </div>
    
      <div class="row">
      <div class="form-group col-md-3">
        <div>
          <label>ก : <input type="radio"  value="1" name="answer1"></label>
            <input type="text" class="form-control" name="a1[]" placeholder="กรอกชื่อวิชา..." value="">
        </div>  
      </div>
      <div class="form-group col-md-3">
            <label>ข : <input type="radio"  value="2" name="answer1"></label>
                <input type="text" id="q2" class="form-control" name="a2[]" placeholder="กรอกชื่อวิชา..." value="">      
      </div>
      <div class="form-group col-md-3">
            <label>ค : <input type="radio"  value="3" name="answer1"></label>
                <input type="text" class="form-control" name="a3[]" placeholder="กรอกชื่อวิชา..." value="">
      </div>
      <div class="form-group col-md-3">
            <label>ง : <input type="radio"  value="4" name="answer1"></label>
                <input type="text" class="form-control" name="a4[]" placeholder="กรอกชื่อวิชา..." value="">
      </div>
      </div>
      
      <div class="row">
      <div class="form-group col-md-3">
          <!-- <p>Custom file:</p> -->
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga11">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>  
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga21">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>      
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga31">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
      </div>
      <div class="form-group col-md-3">
          <div class="custom-file mb-3">
            <input type="file" class="custom-file-input" id="customFile" name="imga41">
            <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
      </div>
      </div>
      </div>
      <div style="text-align: center;">
        <button type="button" class="btn btn-info" onClick="addInput('dynamicInput');">เพิ่มโจทย์</button>
      </div>
            <div class="form-group">
            <label>ชื่ออาจารย์ :</label>
                <input type="text" class="form-control" disabled="" value="<?php echo $_SESSION['name'] ?>">
                <input type="text" name="member_id" value="<?php echo $_SESSION['user']?>" hidden>
            </div>
            <div class="update ml-auto mr-auto">
                <button type="submit" class="btn btn-primary btn-round">เพิ่มแบบทดสอบ</button>
            </div>
<script type="text/javascript">
      var counter = 1;
      var limit = 10;

    function addInput(divName){

         if (counter == limit)  {
            alert("You have reached the limit of adding " + counter + " inputs");
         }

         else {

              var newdiv = document.createElement('div');

              newdiv.innerHTML = "ข้อ " + (counter + 1) + " <br>"+"<div class=\"row\">"+
      "<div class=\"form-group col-md-8\">"+
            "<label>คำถาม :</label>"+
                "<input type=\"text\" class=\"form-control\" name=\"question[]\" placeholder=\"กรอกชื่อวิชา...\" value=\"\">"+
      "</div>"+
      "<div class=\"col-md-4\">"+
        "<div style=\"margin-top: 25px;padding: 0px\">"+
          "<div class=\"custom-file mb-3\">"+
            "<input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"imgq"+(counter + 1)+"\">"+
            "<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>"+
          "</div>"+
        "</div>"+
      "</div>"+
    "</div>"+

      "<div class=\"row\">"+
      "<div class=\"form-group col-md-3\">"+
        "<div>"+
          "<label>ก : <input type=\"radio\"  value=\"1\" name=\"answer"+(counter + 1)+"\"></label>"+
              "<input type=\"text\" class=\"form-control\" name=\"a1[]\" placeholder=\"กรอกชื่อวิชา...\" value=\"\">"+
        "</div>"+ 
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
            "<label>ข : <input type=\"radio\"  value=\"2\" name=\"answer"+(counter + 1)+"\"></label>"+
                "<input type=\"text\" id=\"q2\" class=\"form-control\" name=\"a2[]\" placeholder=\"กรอกชื่อวิชา...\" value=\"\">"+      
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
            "<label>ค : <input type=\"radio\"  value=\"3\" name=\"answer"+(counter + 1)+"\"></label>"+
                "<input type=\"text\" class=\"form-control\" name=\"a3[]\" placeholder=\"กรอกชื่อวิชา...\" value=\"\">"+
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
            "<label>ง : <input type=\"radio\"  value=\"4\" name=\"answer"+(counter + 1)+"\"></label>"+
                "<input type=\"text\" class=\"form-control\" name=\"a4\" placeholder=\"กรอกชื่อวิชา...\" value=\"\">"+
      "</div>"+
      "</div>"+
      "<div class=\"row\">"+
      "<div class=\"form-group col-md-3\">" +    
      "<div class=\"custom-file mb-3\">"+
          "<input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"imga1"+(counter + 1)+"\">" +
          "<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>"+
          "</div>"+ 
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
          "<div class=\"custom-file mb-3\">"+
          "<input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"imga2"+(counter + 1)+"\">"+
          "<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>"+
          "</div>"+      
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
          "<div class=\"custom-file mb-3\">"+
            "<input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"imga3"+(counter + 1)+"\">"+
            "<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>"+
          "</div>"+
      "</div>"+
      "<div class=\"form-group col-md-3\">"+
          "<div class=\"custom-file mb-3\">"+
            "<input type=\"file\" class=\"custom-file-input\" id=\"customFile\" name=\"imga4"+(counter + 1)+"\">"+
            "<label class=\"custom-file-label\" for=\"customFile\">Choose file</label>"+
          "</div>"+
      "</div>"+
      "</div> ";

              document.getElementById(divName).appendChild(newdiv);

              counter++;

         }

    }
</script>
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