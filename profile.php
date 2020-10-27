<?php $page='profile'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          <h5 class="card-title">โปรไฟล์ส่วนตัว</h5>
            <p class="card-category">
              <!-- <a href="https://nucleoapp.com/?ref=1712">NucleoApp</a> -->
            </p>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <form onsubmit="return editprofile()" method="post" style="margin-left: 180px;width: 100%;">
<?php include("fuction/connectDB.php");
$sqlp = "SELECT * FROM tb_member where member_ID='".$_SESSION['user']."'";
$rre = mysqli_query($conn,$sqlp);
$rowp = mysqli_fetch_array($rre);
?>
          <div class="row">
            <div class="col-4">
              <label for="">รหัสนักศึกษาหรือชื่อผู้ใช้งาน :</label>
              <input type="text" name="user" readonly="" id="user" value="<?php echo $rowp['member_ID']?>" class="form-control">
            </div>
            <div class="col-4">
              <label for="">อีเมล์ :</label>
              <input type="text" name="email" id="email" value="<?php echo $rowp['member_email']?>" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label for="">ชื่อ :</label>
              <input type="text" name="fn" value="<?php echo $rowp['member_FName']?>" id="fn" class="form-control">
            </div>
            <div class="col-4">
              <label for="">นามสกุล :</label>
              <input type="text" name="ln" id="ln" value="<?php echo $rowp['member_LName'] ?>" class="form-control">
            </div>
          </div>
          <div class="row"> 
            <div class="col-4">
              <label for="">รหัสผ่าน</label>
              <input type="password" name="pass" value="<?php echo $rowp['member_Password']?>" id="pass" class="form-control">
            </div>
            <div class="col-4">
              <label for="">ยื่นยันรหัส</label>
              <input type="password" name="passs" value="<?php echo $rowp['member_Password']?>" id="passs" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-4">
              <label for="">เพศ :</label><br>
              <?php if ($rowp['member_gender']==1) { ?>
                <input type="radio" checked name="gender" id="gender"> ชาย
                <input type="radio" name="gender" id="gender"> หญิง
              <?php } else { ?>
                <input type="radio" name="gender" id="gender"> ชาย
                <input type="radio" checked name="gender" id="gender"> หญิง
              <?php } ?>
              
              
            </div>
            <div class="col-4">
              <label for="">เบอร์โทร</label>
              <input type="text" name="tel" value="<?php echo $rowp['member_Tel']?>" id="tel" class="form-control">
            </div>
          </div>
          <div class="row">
            <div style="margin-left: 300px;">
              <input type="submit" value="บันทึก" class="btn btn-info">
            </div>
            
          </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php'); ?>