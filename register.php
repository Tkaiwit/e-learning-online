<?php $page='regiser'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header" style="text-align: center;">
          <h5 class="card-title">สมัครสมาชิก</h5>
            <!-- <p class="card-category"><a href="add_coures.php"disabled=""><b style="border-bottom: 2px solid #eaeaea;">เข้าสู่ระบบสำหรับนักเรียน</b>
              </a>&nbsp;&nbsp;/&nbsp;&nbsp;
             <a href="add_unit.php"> เข้าสู่ระบบสำหรับอาจารย์
              </a>
            </p>
 -->            
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <form method="post"  onsubmit="return register();" style="margin-left: 162px; width: 100%;">
          <div class="row">
            <div class="col-4">
            <div class="form-group">
            <label>รหัสนักศึกษา :</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="กรอกรหัสนักศึกษาหรือชื่อผู้ใช้งาน..." value="">
            </div>
            </div>
            <div class="col-4">
            <div class="form-group">
            <label>email :</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="กรอกอีเมลล์..." value="">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-4">
            <div class="form-group">
            <label>ชื่อ :</label>
                <input type="text" class="form-control" id="fn" name="fn" placeholder="กรอกชื่อ..." value="">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
            <label>นามสกุล :</label>
                <input type="text" class="form-control" id="ln" name="ln" placeholder="กรอกนามสกุล..." value="">
            </div>
          </div>
          </div>
            
          <div class="row">
            <div class="col-4">
            <div class="form-group">
            <label>รหัสผ่าน :</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="กรอกรหัสผ่าน..." value="">
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
            <label>ยืนยันรหัสผ่าน :</label>
                <input type="password" class="form-control" id="passs" name="passs" placeholder="กรอกรหัสผ่าน..." value="">
            </div>
          </div>
          </div>
          <div class="row">
            <div class="col-4">
            <div class="form-group">
            <label>เพศ :</label><br>
            <label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="1" checked="checked" name="gender"> ชาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <input type="radio" value="2" checked="checked" name="gender"> หญิง
            </label>
            </div>
          </div>
            <div class="col-4">
            <div class="form-group">
            <label>เบอร์โทร :</label>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="กรอกเบอร์โทร..." value="">
            </div>
          </div>
            </div>
          </div>
            <div class="row">
            <div class="update ml-auto mr-auto" style="text-align: center;">
                <button type="submit" name="but_submit" id="but_submit" class="btn btn-info btn-round">Register Now!</button>
            </div>
            </div>
          </form>

          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php'); ?>