<?php $page="welcome"; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header" style="text-align: center;">
          <h5 class="card-title">ยินดีตอนรับ</h5>
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
          	<div style="text-align: center;">
          		<?php if (array_key_exists('user', $_SESSION) AND !empty($_SESSION['name'])) {?>
                <!-- <a class="nav-link btn-magnify" href="#pablo"> -->
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">ICON</span>
                  
                  
                  </p><?php echo $_SESSION['name']; ?>
                <!-- </a> -->
                <?php } else { ?>
                <!-- <a class="nav-link btn-magnify" href="./login.php"> -->
                  <i class="nc-icon nc-single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">ICON</span>
                  
                  
                  <!-- </p><?php echo "คุณยังไม่เข้าสู่ระบบ!"; ?> -->
                </a>
                  <?php } ?>
          	</div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('layer/footer.php');?>