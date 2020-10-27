<?php $page='coures'; include('layer/header.php'); ?>
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card demo-icons">
        <div class="card-header">
          
          <?php include('fuction/connectDB.php');
          $id = $_GET['ids'];
                $sqll = "SELECT * FROM `tb_unit` WHERE unit_ID='".$id."'";
                $rss = mysqli_query($conn,$sqll);
                while ($rows = mysqli_fetch_array($rss)) { ?>
            <!-- <p class="card-category"><?php echo $rows['unit_Name']; ?> -->
              <h5 class="card-title"><?php echo $rows['unit_Name'];?></h5>
            <!-- </p> -->
        <?php } ?>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
             <?php include('fuction/connectDB.php');
              $sql = "SELECT * FROM `tb_unit`WHERE unit_ID='".$id."'";
              $sq = mysqli_query($conn,$sql);
              while ($row=mysqli_fetch_array($sq)) {?>
              <p>
              <iframe src="<?php echo $row['unit_Detail']?>" width="100%" height="420"></iframe>
              </p>
              </p>
              <?php
                }
              ?>
          </div>
         </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php') ?>