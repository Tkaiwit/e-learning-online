<?php $page='login'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header" style="text-align: center;">
          <h5 class="card-title">เข้าสู่ระบบ</h5>
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
          <form method="post"  onsubmit="return logins();" style="width: 400px; margin-left: 290px;">
            <div class="form-group">
            <label>รหัสนักศึกษา :</label>
                <input type="text" class="form-control" id="user" name="user" placeholder="กรอกรหัสนักศึกษาหรือชื่อผู้ใช้งาน..." value="">
            </div>
            <div class="form-group">
            <label>รหัสผ่าน :</label>
                <input type="password" class="form-control" id="pass" name="pass" placeholder="กรอกรหัสผ่าน..." value="">
            </div>
            <div class="form-group">
            <label>
              <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            </div>
            <div class="form-group" >
              <div id="text" style="text-align: center;color: red;"></div>
            </div>
            
            <div class="update ml-auto mr-auto" style="text-align: center;">
                <button type="submit" name="but_submit" id="but_submit" class="btn btn-success btn-round">login</button>
            </div>
            <div class="form-group" >
              <a href="register.php">สมัครสมาชิก!</a>
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