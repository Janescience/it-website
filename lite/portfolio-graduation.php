<!DOCTYPE html>
<html lang="en">

<head >
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



     <?php  include('header.php') ?>

     <style>
     .HallResults div[visible='false'],
     .noHall-result{
       display:none;
     }

     .HallResults div[visible='true']{
       display:div-div;
     }

     .HallAvatar {
     width:100px;
     margin: 10px;
     border-radius: 500px;
     -webkit-border-radius: 500px;
     -moz-border-radius: 500px;
     }

     #showHall div{
     text-align:center;
     vertical-align:middle;
     }


     .PortResults div[visible='false'],
     .noPort-result{
     display:none;
     }

     .PortResults div[visible='true']{
     display:div-ul;
     }

     .PortAvatar {
     width:100px;
     margin: 10px;
     border-radius: 500px;
     -webkit-border-radius: 500px;
     -moz-border-radius: 500px;
     }

     #list_user td{
     text-align:center;
     vertical-align:middle;
     }


     </style>
</head>

<body class="fix-header fix-sidebar card-no-border logo-center">



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
              <h1 class="card-title text-center "><i class="mdi mdi-trophy-award text-warning"></i> ผลงานระดับบัณฑิตศึกษา <i class="mdi mdi-trophy-award text-warning"></i> </h1>

            </div>
          </div>
        </div>
        </div>


  <div class="row">
    <div class="col-xlg-12 col-lg-12 col-md-12 col-sm-12 col-xl-12">
      <div  class="row el-element-overlay">
          <div class="card-block">
            <h1 class="card-title text-center "><i class="mdi mdi-trophy text-warning"></i><br>ผลงานดีเด่น</h1>
            <h5 class="card-title text-center ">o o o</h5>
            <div class="row">
              <div class="col-md-4">
              </div>
              <div class="col-md-4">
              </div>
              <div class="col-xlg-4 col-lg-4 col-md-4 col-sm-4 col-xl-4">

              <div class="form-group">
                <span class="counter pull-right"></span>
                  <div class="input-group">
                    <div class="input-group-addon"><i class="ti-search"></i></div>
                    <input id="searchHall" type="text"  class="form-control" >
                  </div>
                </div>
              </div>
            </div>
          <div id="showHall"  class="row"></div>
          </div>

      </div>
    </div>
  </div>


          <div class="row">
            <div class="col-xlg-12 col-lg-12 col-md-12 col-sm-12 col-xl-12">
              <div  class="row el-element-overlay">
                  <div class="card-block">
                    <h2 class="card-title text-center "><i class="mdi mdi-trophy-variant  "></i><br> ผลงานทั่วไป</h2>
                    <h5 class="card-title text-center ">o o o</h5>
                    <div class="row">
                      <div class="col-md-4">
                      </div>
                      <div class="col-md-4">
                      </div>
                      <div class="col-xlg-4 col-lg-4 col-md-4 col-sm-4 col-xl-4">

                      <div class="form-group">
                        <span class="PortCounter pull-right"></span>
                          <div class="input-group">
                            <div class="input-group-addon"><i class="ti-search"></i></div>
                            <input id="searchPort" type="text"  class="form-control" >
                          </div>
                        </div>
                      </div>
                    </div>
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
    <script src="js/portfolio-graduation.js"></script>
    <script src="js/hallofframe-graduation.js"></script>
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
