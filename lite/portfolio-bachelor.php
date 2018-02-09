<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta property="og:url"           content="http://it2.sut.ac.th/prj60_g7/it-website/lite/portfolio-bachelor.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="ผลงานระดับปริญญาตรี" />
    <meta property="og:description"   content="สาขาวิชาเทคโนโลยีสารสนเทศ มหาวิทยาลัยเทคโนโลยีสุรนารี" />
    <meta property="og:image"         content="http://it2.sut.ac.th/prj60_g7/it-website/images/img1.png" />

     <?php  include('header.php') ?>

</head>

<body class="fix-header fix-sidebar card-no-border logo-center">

  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

    <div class="preloader">
      <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>

    <div id="main-wrapper">

    <?php  include('navbar.php') ?>

      <div class="page-wrapper">
        <div class="card-block">
        <div class="card">
          <div class="card-block">
            <div class="row text-center">
                <div class="card-block">
            <div class="card col-xlg-12 col-lg-12 col-md-12 col-sm-12 ">
              <div class="card-block">
                <h1 class="card-title text-center "><i class="mdi mdi-trophy-award text-warning"></i> ผลงานระดับปริญญาตรี <i class="mdi mdi-trophy-award text-warning"></i> </h1>

                <div class="fb-share-button" data-href="http://it2.sut.ac.th/prj60_g7/it-website/lite/portfolio-bachelor.php" data-layout="button_count" data-size="large" data-mobile-iframe="true">
                  <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">แชร์ กิจกรรม</a>
                </div>
              </div>
            </div>
          </div>
          </div>



  <div class="row">
    <div class="col-xlg-12 col-lg-12 col-md-8">
      <div  class="row el-element-overlay">
          <div class="card-block">
            <h1 class="card-title text-center "><i class="mdi mdi-trophy text-warning"></i><br>ผลงานดีเด่น</h1>
            <h5 class="card-title text-center ">o o o</h5>
          <div id="showHall"  class="row"></div>
          </div>

      </div>
    </div>
  </div>


          <div class="row">
            <div class="col-xlg-12 col-lg-12 col-md-8">
              <div  class="row el-element-overlay">
                  <div class="card-block">
                    <h2 class="card-title text-center "><i class="mdi mdi-trophy-variant "></i><br> ผลงานทั่วไป</h2>
                    <h5 class="card-title text-center ">o o o</h5>
                  <div id="showPort"  class="row"></div>
                  </div>

              </div>
            </div>
          </div>



        </div>
        </div>

        </div>
      </div>
<?php include('footer.php')?>
            <footer class="footer">Copyright © Information Technology 2017</footer>
    </div>

    <?php include('import-javascript.php')?>
    <script src="js/portfolio-bachelor.js"></script>
    <script src="js/hallofframe-bachelor.js"></script>
</body>

<!--====================================  hall of frame Modal ====================================================-->

<div class="modal fade" id="hallofframeModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="namePort"></h2>
      </div>
      <div class="modal-body ">
          <div  class="container tab-pane active " id="Detail">
          <h4><i class="mdi mdi-comment-text-outline"></i> รายละเอียด</h4>
        <p id="portDetail">

          </p>

          <h4><i class="mdi mdi-format-list-bulleted-type"></i> ประเภทผลงาน</h4>
          <p id="portType">

          </p>

          <h4><i class="mdi mdi-trophy-variant"></i> ปีที่ได้รับรางวัล</h4>
          <p id="portYear">

          </p>

            <h4><i class="mdi mdi-image-area"></i> รูปภาพ</h4><br>
          <div class="col-xlg-12" style="align:center" id="portImage">

          </div>
      </div>
    </div>

      <div class="modal-footer ">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->


<!--====================================  hall of frame Modal ====================================================-->

<div class="modal fade" id="portfolioModal" role="dialog" aria-labelledby="Message" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="namePortfolio"></h2>
      </div>
      <div class="modal-body">
          <div  class="container tab-pane active" id="Detail">
          <h4><i class="mdi mdi-comment-text-outline"></i> รายละเอียด</h4>
          <p id="portfolioDetail">

          </p>

          <h4><i class="mdi mdi-format-list-bulleted-type"></i> ประเภทผลงาน</h4>
          <p id="portfolioType">

          </p>

          <h4><i class="mdi mdi-trophy-variant"></i> ปีที่ได้รับรางวัล</h4>
          <p id="portfolioYear">

          </p>

            <h4><i class="mdi mdi-image-area"></i> รูปภาพ</h4><br>
          <div class="col-xlg-12" style="align:center" id="portfolioImage">

          </div>
      </div>
    </div>

      <div class="modal-footer">
        <button id="btClose" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>
    </div>
  </div>
</div>

<!--===========================================================================================================-->


</html>
