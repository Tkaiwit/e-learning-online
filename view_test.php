<?php $page='test'; include('layer/header.php'); ?>


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
              <h5 class="card-title">แบบทดสอบ <?php echo $rows['unit_Name'];?></h5>
        <?php } ?>
        </div>
        <div class="card-body all-icons">
        <div id="icons-wrapper">
          <div class="card-body">
          <div class="table-responsive">
            <form id="myform" method="post" onsubmit="return MarkAnswerss()" >
             <?php include('fuction/connectDB.php');
              $id = $_GET['ids'];
              $sql = "SELECT * FROM `tb_a_q` WHERE unit_ID='".$id."'";
              $sq = mysqli_query($conn,$sql);
              while ($row=mysqli_fetch_array($sq)) { ?>
              <?php 
              $qs = $row['aq_detail'];
              $datas = explode(",\r\n",$qs);
              $data = explode("\r\n ,",$qs);
              $cv = count($data); 
              echo "<input type=\"text\" hidden=\"hidden\" value=\"".$row['course_ID']."\" id=\"course\" name=\"course\">";
              echo "<input type=\"text\" hidden=\"hidden\" value=\"".$row['unit_ID']."\" id=\"unit\" name=\"unit\">";
              echo "<input type=\"text\" hidden=\"hidden\" value=\"".$_SESSION['user']."\" id=\"user\" name=\"user\" >";
              
              if ($datas[0]) {
                  echo "<div class=\"container\" >";
                  if (empty($datas[6])) {} else {
                    echo "<img width=\"300\" hight=\"190\" src=\"".$datas[6]."\"><br>";
                  }
                  echo "<input type=\"hidden\" name=\"A".$row['aq_num']."\" > <b>".$datas[0]."</b><br>";
                  echo "<input type=\"radio\" value=\"1\" name=\"A".$row['aq_num']."\" > ".$datas[1]."<br>";
                  if (!empty($datas[7])) {
                    echo "<img width=\"300\" hight=\"190\" src=\"".$datas[7]."\"><br>";
                  }
                  echo "<input type=\"radio\" value=\"2\" name=\"A".$row['aq_num']."\" > ".$datas[2]."<br>";
                  if (!empty($datas[8])) {
                    echo "<img width=\"300\" hight=\"190\" src=\"".$datas[8]."\"><br>";
                  }
                  echo "<input type=\"radio\" value=\"3\" name=\"A".$row['aq_num']."\" > ".$datas[3]."<br>";
                  if (!empty($datas[9])) {
                    echo "<img width=\"300\" hight=\"190\" src=\"".$datas[9]."\"><br>";
                  }
                  echo "<input type=\"radio\" value=\"4\" name=\"A".$row['aq_num']."\" > ".$datas[4]."<br>";
                  if (!empty($datas[10])) {
                    echo "<img width=\"300\" hight=\"190\" src=\"".$datas[10]."\"><br>";
                  }
                  // echo "<input type=\"text\" value=\"".$datas[5]."\" name=\"answer".$row['aq_num']."\" ><br>";
                  echo "<input type=\"radio\" hidden=\"hidden\" value=\"".$datas[5]."\" name=\"answer".$row['aq_num']."\" ><br>";
                  echo "</div>";
              }
              
              ?>
              <?php
                }
              ?>
              <div><input class="btn btn-info" type="submit" value="ตรวจคำตอบ"></div>
          </form>
          </div>
         </div>
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('layer/footer.php') ?>